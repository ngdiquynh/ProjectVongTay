getId("btnThem").addEventListener('click',function(){   
  
    getId("btnEdit").style.display='none';
    getId("btnAdd").style.display='block';
})



function xoa(name){
   
    alert(`xóa thành công sản phẩm : {name}`);
}

function add(){
   
    alert(`Thêm thành công sản phẩm `);
}

function editpro(name){
    alert(`Update thành công sản phẩm ${name}`);
}
function edit(){

    getId("btnAdd").style.display='none';
    getId("btnEdit").style.display='block';
   
      
}

function getId(id){
    return document.getElementById(id);
}