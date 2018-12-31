<template>
	<div>
		<h1>testing</h1>
		<ul>
			<li v-for="task in tasks">
				{{ task.name }}
				<span>&times;</span>
			</li>
		</ul>
	</div>
	
</template>

<script>
	export default {
		name:'task',
		data(){
			return{
				tasks:[
				{name:'reading',description:'testing'}
				],
				Newtask:{
					name:'',
					description:''
				}
			}
		}
	}
</script>