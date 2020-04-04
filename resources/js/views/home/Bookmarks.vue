<template>
    <div class="col-md-9 col-sm-12">

        <div class="card bookmarky_container">
            <div class="card-header">
                <input class="form-control" placeholder="Filter bookmarks">
            </div>

            <div class="card-body">
                <h3 v-if="bookmarks === null" class="text-center">Looading Bookmarks</h3>
                <h3 v-if="bookmarks && bookmarks.length == 0" class="text-center">No Bookmarks</h3>
                <div v-if="bookmarks && bookmarks.length > 0" class="row">
                    <bookmark :key="bookmark.id" v-for="bookmark in bookmarks" :bookmark="bookmark"/>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import axios from 'axios';

    import Bookmark from "./Bookmark";

    export default {
        name: "Bookmarks",
        components: {
            Bookmark
        },
        data() {
            return {
                bookmarks: null
            }
        },
        mounted() {
            this.fetchBookmarks();
            bus.$on('fetchBookmarks', this.fetchBookmarks);
        },
        methods: {
            fetchBookmarks() {
                axios.get('/bookmarks').then(response => {
                    this.bookmarks = response.data;
                    window.bb = this.bookmarks[0];
                });
            }
        }
    }
</script>

<style scoped>
    .bookmarky_container .card-header {
        background-color: transparent;
    }

    .bookmarky_bookmark_card h5 {
        white-space: nowrap;
        overflow: hidden;
    }


</style>
