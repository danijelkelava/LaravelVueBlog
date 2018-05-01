<template>
	<div>
		<ul class="nav">
		  <li v-for="tab in tabs" >
		    <a :href="tab.href" @click="selectTab(tab)" :class="{'text-white bg-dark': tab.isActive}" class="nav-link" >{{ tab.name }}</a>
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