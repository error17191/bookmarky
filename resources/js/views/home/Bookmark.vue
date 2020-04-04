<template>
    <div class="col-md-8 offset-md-2 bookmarky_bookmark_card">
        <div class="card">
            <img class="card-img-top" :src="image|| '/missing.png'" @error="onImageLoadError">

            <div class="card-body">
                <a :href="bookmark.link" target="_blank">
                    <h5 class="card-title">{{bookmark.title || bookmark.link}}</h5>
                </a>
                <p class="card-text">{{bookmark.description}}</p>

                <div class="d-inline" v-for="tag in bookmark.tags">
                    <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">
                        {{tag.name}}
                    </span>&nbsp;
                </div>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Bookmark",
        props: ['bookmark'],
        mounted() {
            this.image = this.bookmark.image;
        },
        data() {
            return {
                image: null
            }
        },
        methods: {
            onImageLoadError() {
                this.image = '/missing.png';
            }
        }
    }
</script>

<style scoped>

    .card-img-top {
        height: 300px;
        object-fit: cover;
    }


    .bookmarky_bookmark_card {
        margin-bottom: 20px;
    }

    .bookmarky_bookmark_card {
        width: fit-content;
    }

</style>
