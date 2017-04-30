<template>
    <ul class="chat">
        <li class="left clearfix" v-for="comment in comments">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ comment.user.name }}:
                        
                    </strong>
                </div>
                <p>
                    {{ comment.body }}

                </p>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['comments', 'post']
  };
</script>