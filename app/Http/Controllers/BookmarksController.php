<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;
use LinkPreview\LinkPreview;

class BookmarksController extends Controller
{
    public function index()
    {
        return auth()->user()->bookmarks()->with('tags')->latest()->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
        ]);

        $linkPreview = new LinkPreview($request->link);
        $parsed = $linkPreview->getParsed();
        $bookmark = new Bookmark();
        $bookmark->user_id = auth()->id();
        $bookmark->link = $request->link;
        foreach ($parsed as $parserName => $link) {
            $bookmark->title = $link->getTitle();
            $bookmark->description = $link->getDescription();
            $bookmark->image = $link->getImage();
            break;
        }

        $bookmark->save();

    }
}
