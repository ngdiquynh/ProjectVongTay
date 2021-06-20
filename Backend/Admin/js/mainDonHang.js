var danhSachDonHang = new DanhSachDonHang() ;
getLocalstorage();

getID('btnThem').addEventListener("click", function(){
    getID('btnEdit').style.display='none';
    getID('btnAdd').style.display='block';
});
getID('btnAdd').addEventListener('click',function(){
    var maDonHang= getID('maDonHang').value;
    var maKH= getID('maKH').value;
    var ngay= getID('datepicker').value;
    var pay= getID('creditCard').value;
    var price= getID('price').value;
    var status= getID('status').value; 
    var DH = new DonHang(maDonHang,maKH,ngay,pay,price,status);
    console.log(DH);
    danhSachDonHang.themDonHang(DH);
    getID("btnDong").click();
    setLocalstorage();
   
  

})

function createData(arr){
    var content ='';
    arr.map((item,index)=>{
        content += `
            <tr key=${index}>
                <td>${item.maDonHang}</td>
                <td>${item.maKH}</td>
                <td>${item.ngay}</td>
                <td>${item.pay}</td>
                <td>${item.price}</td>
                <td>${item.status}</td>
                <td>
                  <button class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="editDon('${item.maDonHang}')">Edit</button>
                  <button class="btn btn-danger" onclick="delDon('${item.maDonHang}')">Delete</button>
                </td>
            </tr>
        `
    });
    getID('tableDonHang').innerHTML=content;
}

function editDon(id){
    getID('btnEdit').style.display='block';
    getID('btnAdd').style.display='none';
    var DH = danhSachDonHang.thongTinDon(id);
    getID('maDonHang').value= DH.maDonHang;
    getID('maKH').value=DH.maKH;
    getID('datepicker').value=DH.ngay;
    getID('creditCard').value=DH.pay;
    getID('price').value=DH.price;
    getID('status').value=DH.status; 
}

getID("btnEdit").addEventListener("click", function(){
    var maDonHang= getID('maDonHang').value;
    var maKH= getID('maKH').value;
    var ngay= getID('datepicker').value;
    var pay= getID('creditCard').value;
    var price= getID('price').value;
    var status= getID('status').value; 
    var DH = new DonHang(maDonHang,maKH,ngay,pay,price,status);
    console.log(DH);
    danhSachDonHang.capNhatDon(DH);
    createData(danhSachDonHang.arr);
    setLocalstorage();
    getID("btnDong").click();
})
function delDon(id){
    danhSachDonHang.xoaDon(id);
    createData(danhSachDonHang.arr);
    setLocalstorage();
}

function getID(id){
    return document.getElementById(id);
}
function setLocalstorage(){
    var arr = JSON.stringify(danhSachDonHang.arr);
    localStorage.setItem("Don",arr);
}
function getLocalstorage(){
    if (localStorage.getItem("Don")) {
        danhSachDonHang.arr=JSON.parse(localStorage.getItem("Don"))
        createData(danhSachDonHang.arr);
    }
}