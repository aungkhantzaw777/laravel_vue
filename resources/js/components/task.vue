<template>
	<div class="container">
		<h1>to do task</h1>
		<ul>
			<li v-for="task in tasks">
				{{ task.name }}
				<span class="pull-right">&times;</span>
			</li>
		</ul>
		<input type="text" v-model="Newtask.name"><button @click="add">add</button>
		
	</div>
	
</template>

<script>
	import axios from 'axios'

	export default {
		name:'task',
		data(){
			return{
				tasks:[],
				Newtask:{
					name:''
				}
			}
		},
		created(){
			// console.log(this.tasks)
			var _this = this

			axios.get('/api/create')
				.then(function(response){
					_this.tasks = response.data
				})
		},
		methods:{
			add:function(){
				let task = this.Newtask.name
				let _this = this
				// console.log(task)
				axios.post('/api',{
					name:task
				})
				.then(function(response){
					// this.tasks.push({name:response.name})
					_this.tasks = response.data
				})
				this.Newtask = ({name:''})

			}
		}
	}
</script>

<style scoped>
	.hide{
		display:none;
	}
</style>