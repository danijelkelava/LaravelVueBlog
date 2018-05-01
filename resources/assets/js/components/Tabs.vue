<template>
	<div>
		<ul class="nav">
		  <li v-for="tab in tabs" class="nav-item">
		    <a class="nav-link active" href="#">{{ tab.name }}</a>
		  </li>
		</ul>
		<div>
			<slot></slot>
		</div>
	</div>

</template>

<script>
	export default {
		data(){
			return {
				tabs: []
			}
		},
		created(){
			this.tabs = this.$children;
		},
		mounted(){
			console.log(this.tabs);
		}
	}
</script>