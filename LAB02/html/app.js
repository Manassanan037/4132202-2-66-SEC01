    var num  = 10;   //var จะประกาศตัวแปร ใช้ได้หมด  
    let name = "Grace";  //let จะประกาศตัวแปร ใช้ไดแค่วงเล็บ ถ้าประกาศแค่ในวงเล็บก็ใช้ได้แค่ในวงเล็บ
    age = 19;

    fruit = ["Watermelon","apple","lemon"];  //คือการประกาศอาเรย์
    ojb = {name:"Manassanan",age:15,tel:"0985092535"};  //ประกาศ อ็อบเจก

    data = {adress:["150/91","jira","Buriram", 31000],name:"Mama"};

    console.log(fruit[1]); //ให้แสดงผลที่ consloe
    console.log(ojb.tel);
    console.log(data.adress[2]);

    document.getElementById("msg").innerHTML = data.adress[2];

    let longTxt = data.name + " : " + fruit[0];

    longTxt = `${data.name} : 
                ${fruit[1]}`;  //การใช้ ` ช่วยประหยัดบรรทัด ใช้ได้เหมือนกับบรรทัด 30 
    
    $(function(){           //เป็นตัวเลือก $(); เมื่อจะเริ่มเขียน jqury สั่งทำการที่โหลดเอกสารเสร็จแล้ว
        $("#msg").html(longTxt);  //ให้เปลี่ยนเอกสาร msg ให้เป็น longxt
    }); //่jquery ready
