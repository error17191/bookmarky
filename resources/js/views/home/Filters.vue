<template>
    <div class="col-md-3 col-sm-12">
        <div class="card bookmary_tags_box">
            <div class="card-header">Tags</div>

            <div class="card-body">
                <div class="form-group">
                    <input class="form-control" placeholder="Search for a tag">
                </div>
                <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">Primary</span>
                <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">Primary</span>
                <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">Primary</span>
                <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">Primary</span>
                <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">Primary</span>
                <span class="badge badge-primary bookmarky_tag bookmarky_tag_selected">Primary</span>
                <hr>
                <span class="badge badge-secondary bookmarky_tag">Secondary </span>
                <span class="badge badge-secondary bookmarky_tag">Secondary </span>
                <span class="badge badge-secondary bookmarky_tag">Secondary </span>
                <span class="badge badge-secondary bookmarky_tag">Secondary </span>
                <span class="badge badge-secondary bookmarky_tag">Secondary </span>
                <span class="badge badge-secondary bookmarky_tag">Secondary </span>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Filters"
    }
</script>

<style scoped>
    .bookmary_tags_box {
        margin-bottom: 20px;
    }

    .bookmarky_tag {
        cursor: pointer;
    }

</style>
