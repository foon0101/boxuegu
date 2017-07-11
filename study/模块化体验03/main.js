
requirejs.config({
  baseUrl:'/study/模块化体验03',
  paths:{
    'a01':'a01',
    'b02':'b02',
    'c03':'c03',
    'xixi':'test/test/xixi'
  }
})

require(['a01','b02','c03','xixi'], function(o0,o1,o2,o3) {
  console.log(o1);
  console.log(o2);
  console.log(o3);
  alert("嗯哼嗯哼哈哈哈哈哈(*^__^*) 嘻嘻😁");
  
});