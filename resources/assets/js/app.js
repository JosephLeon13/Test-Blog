require('./bootstrap');

Vue.component('post-comments', require('./components/PostComments.vue'));
Vue.component('comment-form', require('./components/CommentForm.vue'));

const app = new Vue({
    el: '#app',


    data: {
        comments: [],
        body: [],
    },

    created() {
        this.fetchComments();

        Echo.channel('comment')
          .listen('CommentSent', (e) => {
            this.comments.push({
              comment: e.comment.body,
              user: e.user
            });
          });

    },

    methods: {
        fetchComments() {
            axios.get('/posts/{post}/comments').then(response => {
                this.comments = response.data;
            });
        },

        sendComment(comment) {
            this.comments.push(comment);

            axios.post('/posts/{post/comments')
            .then(response => {
              
            });
        }
    }
});