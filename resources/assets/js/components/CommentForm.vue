<template>
    <div class="input-group">
        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type here..." v-model="body" @keyup.enter="sendComment">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendComment">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['user', 'comment', 'post'],

        data() {
            return {
                body: '',
            }
        },

        methods: {
            sendComment: function() {
                this.$emit('commentsent', {
                    user: this.user,
                    comment: this.body
                });

                this.body = ''
            }
        }    
    }
</script>