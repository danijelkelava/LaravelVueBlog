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
				posts: [],
				post: {
					id: '',
					title: '',
					body: ''
				},
				post_id: ''
			}
		},
		methods: {
			storePost(){
				alert('hi');
			}
		}
	}
</script>