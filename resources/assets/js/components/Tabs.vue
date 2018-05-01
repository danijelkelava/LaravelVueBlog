<template>
	<div>
		<ul class="nav">
		  <li v-for="tab in tabs" >
		    <a @click="selectTab(tab)" :class="{'text-success': tab.isActive}" class="nav-link" href="#">{{ tab.name }}</a>
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
		},
		methods:{
			selectTab(selectedTab){
				this.tabs.forEach(tab => {
					tab.isActive = (tab.name == selectedTab.name);
				})
			}
		}
	}
</script>