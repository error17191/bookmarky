<template>
    <div class="container">
        <div class="row">
            <filters/>
            <bookmarks/>
        </div>
        <div class="fab" @click="newBookmark"> + </div>
        <new-bookmark-modal/>
    </div>

</template>

<script>
    import Filters from "./Filters";
    import Bookmarks from "./Bookmarks";
    import NewBookmarkModal from "./NewBookmarkModal";
    export default {
        name: "HomePage",
        components: {
            Filters,
            Bookmarks,
            NewBookmarkModal
        },
        methods: {
            newBookmark(){
                this.$modal.show('newBookmarkModal');
            }
        }
    }
</script>

<style scoped>
    .fab {
        cursor: pointer;
        width: 70px;
        height: 70px;
        background-color: red;
        border-radius: 50%;
        box-shadow: 0 6px 10px 0 #666;
        transition: all 0.1s ease-in-out;

        font-size: 50px;
        color: white;
        text-align: center;
        line-height: 70px;

        position: fixed;
        right: 50px;
        bottom: 50px;
    }

    .fab:hover {
        box-shadow: 0 6px 14px 0 #666;
        transform: scale(1.05);
    }


</style>
