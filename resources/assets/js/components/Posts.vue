<template>
<div>
  <div class="col-xs-12" v-for="post in posts" v-bind:key="post.id">
    <h2>{{ post.title }}</h2>
    <p>{{ post.body }}</p>
    <button @click="deletePost(post.id)" class="btn btn-danger" href="#" role="button">delete</button>
  </div>
  <nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
	    	<a class="page-link" href="#" @click="fetchPosts(pagination.prev_page_url)">Previous</a>
	    </li>
	    <li class="page-item disabled" ><a class="page-link" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>
	    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
	    	<a class="page-link" href="#" @click="fetchPosts(pagination.next_page_url)">Next</a>
	    </li>
	  </ul>
	</nav>
</div>	
  
</template>

<script>
	export default {
		data(){
			return {
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
			fetchPosts(page_url){
				let vm = this;
				page_url = page_url || '/api/posts';
				fetch(page_url)
				.then(res => res.json())
				.then(res => {
					this.posts = res.data;
					vm.makePagination(res.meta, res.links);
					//console.log(res.data[1]);
				})
				.catch(error => console.log(error));
			},
			makePagination(meta, links){
				let pagination = {
					current_page: meta.current_page,
					last_page: meta.last_page,
					next_page_url: links.next,
					prev_page_url: links.prev 
				}
				this.pagination = pagination;
			},
			deletePost(post){
				if (confirm('Delete?')) {
					fetch(`/api/posts/${post}`, {
						method: 'delete'
					})
					.then(res => res.json())
					.then(data => {
						alert('Article Removed');
						this.fetchPosts();
					})
					.catch(error => console.log(error));
				}
			}
		}
	}
</script>