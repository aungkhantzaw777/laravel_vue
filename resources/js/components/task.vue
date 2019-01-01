<template>
	<div class="container">
		<h1>to do task</h1>
		<div class="card">
			<ul class="list-group list-group-flush">
				<li class="list-group-item" v-for="task in tasks">
					{{ task.name }}
					<span class="float-right"  @click="del(task.id)">&times;</span>
				</li>
			</ul>
		</div>
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

			},
			del:function(id){
				// let _id = id
				let _this = this
				axios.delete('/api/'+id)
				this.getItem()
			},
			getItem:function(){
				var _this = this

				axios.get('/api/create')
					.then(function(response){
						_this.tasks = response.data
					})

			}

		}
	}
</script>

<style scoped>
	.hide{
		display:none;
	}
	.card{
		padding: 10px;
	}
	ul span{
		display: none;
	}
	li:hover span{
		display: block;
		cursor:pointer;
	}
</style>