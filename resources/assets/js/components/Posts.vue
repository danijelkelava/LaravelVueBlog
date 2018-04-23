<template>
<div>
  <div class="col-xs-12" v-for="post in posts" v-bind:key="post.id">
    <h2>{{ post.title }}</h2>
    <p>{{ post.body }}</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div>
</div>	
  
</template>

<script>
	export default {
		data(){
			return {
				title: 'Posts',
				posts: [],
				post: {
					id: '',
					title: '',
					body: ''
				},
				post_id: '',
				pagination: {}
			}
		},
		created(){
			this.fetchPosts();
		},
		methods: {
			fetchPosts(){
				fetch('api/posts')
				.then(res => res.json())
				.then(res => {
					this.posts = res.data;
					console.log(res.data[1]);
				})
			}
		}
	}
</script>