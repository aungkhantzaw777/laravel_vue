<template>
	<div class="container">
		<div class="row">
			<dov class="col-12">
				<h1>hello i am blog component</h1>
				<p>
					{{msg}}
				</p>
			</dov>
		</div>
	</div>
</template>

<script>
	export default{
		name:'blog',
		data(){
			return{
				msg:'hello world'
			}
		}
	}
</script>