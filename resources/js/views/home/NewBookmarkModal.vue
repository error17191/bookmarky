<template>
    <modal name="newBookmarkModal"
           class="m-modal"
           :clickToClose="false"
           height="auto"
           @beforeClose="link = null"
    >
        <div class="modal-container">
            <div class="modal-header">
                <h3 align="center">New Bookmark</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Link</label>
                    <input placeholder="Enter URL Here" type="text" class="form-control" v-model.trim="link">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                        :disabled="disabled"
                        @click.prevent="close()">
                    Cancel
                </button>
                <button type="button" class="btn btn-secondary" :disabled="disabled"
                        @click.prevent="addBookmark()">
                    Add

                </button>
            </div>
        </div>
    </modal>

</template>

<script>
    import axios from 'axios';

    export default {
        name: "NewBookmarkModal",
        data() {
            return {
                link: null,
                disabled:false,
            }
        },
        methods: {
            close() {
                this.link = null;
                this.$modal.hide('newBookmarkModal')
            },
            addBookmark() {
                if (!this.link) {
                    return;
                }
                this.disabled = true;
                axios.post('/bookmarks', {link : this.link}).then(() => {
                    bus.$emit('fetchBookmarks');
                    this.close();
                }).finally(() => {
                    this.disabled = false;
                });
            }

        },
    }
</script>

<style scoped>

</style>
