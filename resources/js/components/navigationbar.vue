<template>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">task</a> -->
	<router-link class="navbar-brand" to='/task'>task</router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <router-link class="nav-link" to='/blog'>blog</router-link>
      </li>
      <li class="nav-item active">
        <router-link class="nav-link" to='/foo'>foo</router-link>
      </li>

    </ul>
  </div>
</nav>
</template>

<script>
	export default {
		name:'navigationbar'
	}
</script>
