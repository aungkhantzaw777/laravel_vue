<template>
	<div class="container">
		<h1>to do task</h1>
		<ul>
			<li v-for="task in tasks">
				{{ task.name }}
				<span class="pull-right">&times;</span>
			</li>
		</ul>
		<input type="text"><button @click="add">add</button>
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
		},
		methods:{
			add:function(){
				alert('hello world')
			}
		}
	}
</script>