function validateForm() {

    /*บัตรประชาชน*/
    let jsID = document.forms["myForm"]["myID"].value;
    if (jsID.length != 13 || jsID != parseInt(jsID, 10)) {
        alert("กรอกเลขบัตรประชาชน ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*ชื่อ*/
    let Name = document.forms["myForm"]["Name"].value;
    if (!isNaN(Name)) {
        alert("ต้องกรอกเป็นตัวอักษรเท่านั้นจ้า!");
        return false;
    }
    if ((Name.length < 2) || (Name.length > 20)) {
        alert("กรอกชื่อ ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*นามสกุล*/
    let LastName = document.forms["myForm"]["LastName"].value;
    if (!isNaN(LastName)) {
        alert("ต้องกรอกเป็นตัวอักษรเท่านั้นจ้า!");
        return false;
    }
    if ((LastName.length < 2) || (LastName.length > 30)) {
        alert("กรอกนามสกุล ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*ที่อยู่ 1*/
    let Address1 = document.forms["myForm"]["Address1"].value;
    if (Address1.length < 5) {
        alert("กรอกที่อยู่ สั้นไปจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*ที่อยู่ 2*/
    let Address2 = document.forms["myForm"]["Address2"].value;
    if (Address2.length < 5) {
        alert("กรอกที่อยู่ สั้นไปจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*ตำบล/แขวง*/
    let SubDistrict = document.forms["myForm"]["SubDistrict"].value;
    if (SubDistrict.length < 2) {
        alert("กรอกตำบล/แขวง ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*อำเภอ/เขต*/
    let District = document.forms["myForm"]["District"].value;
    if (District.length == 0) {
        alert("กรอกอำเภอ/เขต ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*รหัสไปรษณีย์*/
    let Postcode = document.forms["myForm"]["Postcode"].value;
    if (Postcode.length != 5 || Postcode != parseInt(Postcode, 10)) {
        alert("กรอกรหัสไปรษณีย์ ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }

    /*เบอร์โทรศัพท์*/
    let Tel = document.forms["myForm"]["Tel"].value;
    if (((Tel.length < 9) || (Tel.length > 10)) || Tel != parseInt(Tel, 10)) {
        alert("กรอกเบอร์โทรศัพท์ ผิดจ้า!! กรอกใหม่สิจ๊ะ");
        return false;
    }
}