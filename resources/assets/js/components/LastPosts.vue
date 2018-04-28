<template>
	<div>
	  <div class="col-xs-12" v-for="post in posts" v-bind:key="post.id">
	    <h2>{{ post.title }}</h2>
	    <p>{{ post.body }}</p>
	    <button @click="deletePost(post.id)" class="btn btn-danger" href="#" role="button">delete</button>
	  </div>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				posts: [],
				post: {
					id: '',
					title: '',
					body: ''
				},
				post_id: ''
			}
		},
		created(){
			this.fetchLastPosts();
		},
		methods: {
			fetchLastPosts(){
				fetch('api/lastposts')
				.then(res => res.json())
				.then(res => {
					this.posts = res.data;
					//console.log(res.data[1]);
				})
			},
			deletePost(post){
				if (confirm('Delete?')) {
					fetch(`api/posts/${post}`, {
						method: 'delete'
					})
					.then(res => res.json())
					.then(data => {
						alert('Article Removed');
						this.fetchLastPosts();
					})
					.catch(error => console.log(error));
				}
			}
		}
	}
</script>