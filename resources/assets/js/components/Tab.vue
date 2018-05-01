<template>
	<div>
		<slot></slot>
	</div>
</template>
<script>
	export default{
		data(){
			return {
				isActive: false
			}
		},
		mounted(){
			this.isActive = this.selected;
		},
		props: {
			name: {required: true},
			selected: {default: false}
		}
	}
</script>