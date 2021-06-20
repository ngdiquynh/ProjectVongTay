function xoa(name){
    alert(`xóa thành công tài khoản : ${name}`);
}

function Edit(id,tk,mk,email){
    getId("Id").value = id;
    // getId("inputTaiKhoan").value =tk;

}

function getId(id){
    return document.getElementById(id);
}