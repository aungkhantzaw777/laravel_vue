import foo from './components/foo.vue';
import bar from './components/bar.vue';
import task from './components/task.vue';
import blog from './components/blog.vue';

export const routes = [
    {
    	path: '/foo',
    	component: foo,
    	name: 'foo'
	},
    {
    	path: '/bar',
	    component: bar,
	    name: 'bar'
	},
	{
		path:'/task',
		component: task,
		name:task
	},
  {
    path:'/blog',
    component:blog,
    name:'blog'
  }
];
