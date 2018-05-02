<template>
		<form @submit.prevent="storePost">
	      <div class="form-group">
	        <label for="blogTitle">Title</label>
	        <input v-model="post.title" type="text" class="form-control" id="blogTitle" placeholder="Blog title">
	      </div>

	      <div class="form-group">
	        <label for="blogBody">Blog text</label>
	        <textarea v-model="post.body" class="form-control" id="blogBody" rows="3"></textarea>
	      </div>
	      <button type="submit" class="btn btn-primary">Store</button>
	    </form>
</template>

<script>
	export default {
		data(){
			return{
				post: {
					id: '',
					title: '',
					body: ''
				}
			}
		},
		methods: {
			storePost(){
				fetch('api/posts', {
					method: 'post',
					body: JSON.stringify(this.post),
					headers: {
						'content-type': 'application/json'
					}
				})
				.then(res => res.json())
				.then(data => {
					this.post.title = '';
					this.post.body = '';
					alert('Post added');
				})
				.catch(error => console.log(error));
			}
		}
	}
</script>