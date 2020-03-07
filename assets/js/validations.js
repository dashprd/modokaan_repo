
/*$("#productlist").on('change', function(){	
	var itemSelected = $('#productlist').val();	
	var select = document.getElementById("qty");
	document.getElementById("qty").innerHTML = "";
	var items=[];
	if(itemSelected !="" && (itemSelected == "Spicy_Mixture" || itemSelected == "Plain_Mixture" || itemSelected == "Khata_Mitha_Mixture"))
	{
		items = ["Quantity","1 Kg", "2 Kgs","2.5 Kgs","3.5 Kgs","4.5 Kgs","5.5 Kgs"];
	}
	else if( itemSelected !="")
	{
		items = ["Quantity","2 Kgs","2.5 Kgs","3.5 Kgs","4.5 Kgs","5.5 Kgs"];
		
	}
	if(items.length!=0)
	{
	
		for (var item of items)
		{
			var option = document.createElement("option");		
			option.text = item;
			option.value = item;
			select.appendChild(option);
		}
	}	
});

$("#qty").on('change', function(){	
	var itemSelected = $('#productlist').val();	
	var itemSelectedQty = $('#qty').val();	
	var selectedArea = $('#area').val();
	var varQty= parseFloat(itemSelectedQty.replace("Kgs","").replace("Kg",""));
	
	if(itemSelected.includes("Mixture"))
	{
		if(varQty <= 2.5 )
		{
			if(selectedArea == "outside")
			{
				document.getElementById("amount").innerHTML=((varQty*180) + 120).toString();
			}
			else
			{
				document.getElementById("amount").innerHTML=((varQty*180) + 60).toString();
			}			
		}
		else
		{
			if(selectedArea == "outside")
			{
				document.getElementById("amount").innerHTML=((varQty*180) + 120 + ((varQty-2.5)*36)).toString();
			}
			else
			{
				document.getElementById("amount").innerHTML=((varQty*180) + 60 + ((varQty-2.5)*25)).toString();
			}			
		}
		
		document.getElementById("amount").innerHTML="Rs. " + document.getElementById("amount").innerHTML + " /-";
	}
});*/

var refferalCodeStatus=false;
var verifyPinResult=true;

function calculateWeightAndPrice(itemValue,action){
	
	var newWeight="0";
	var newPrice ="0";
	
	if( itemValue!="")
	{
		var array = itemValue.split(":"); 
		var weight=array[1];
		var price=array[2];
		
		if(weight.includes("Gms"))
		{
		
			newWeight = (weight.replace("Gms","").replace(" ","")/1000);
		}
		else
		{
				newWeight = weight.replace("Kgs","").replacec("Kg","").replace(" ","");
		}

		newPrice = price.replace("Rs. ","").replace("/-","");
	}
	else
	{
	
		newWeight=0;
		newPrice =0;
	}
	
	if(action=="remove")
	{
		newWeight=0-newWeight;
		newPrice =0-newPrice;
	}
	
	calculatePrices(newWeight,newPrice);
	
}

function calculatePrices(newWeight,newPrice)
{
	
	document.getElementById("totalweight").value = parseFloat("0"+document.getElementById("totalweight").value) + newWeight ;
	document.getElementById("amount").value = parseFloat("0"+document.getElementById("amount").value) + parseFloat(newPrice);
	
	var ppin =document.getElementById("ppin").value;
	
	verifyPinNo(ppin);
	
	if(parseFloat("0"+document.getElementById("totalweight").value) <=0)
	{
		document.getElementById("deliverycharges").value = "0";
	}
	else
	{
		
		if(ppin.startsWith("7") && verifyPinResult ==true)
		{

			if(parseFloat("0"+document.getElementById("totalweight").value) <=2.5)
			{
				document.getElementById("deliverycharges").value = "50";
			}
			else
			{
				document.getElementById("deliverycharges").value = (50 + 
					(Math.ceil(parseFloat(document.getElementById("totalweight").value)-2.5)*10)).toString();
			}

		}
		/*else
		{
			if(parseFloat("0"+document.getElementById("totalweight").value) <=2.5)
			{
				document.getElementById("deliverycharges").value = "120";
			}
			else
			{
				document.getElementById("deliverycharges").value = (120 + 
					(Math.ceil(parseFloat("0"+document.getElementById("totalweight").value)-2.5)*36)).toString();
			}

		}*/
	}
	
	var discountAmount= 0;

	if(refferalCodeStatus==true)
	{
		discountAmount = Math.ceil((parseFloat(document.getElementById("amount").value) * 5)/100);
		document.getElementById("discountamount").value = discountAmount.toString();
		
	}
	else
	{
		document.getElementById("rcode").value="";
		document.getElementById("discountamount").value = "0";
	}
	
	document.getElementById("totalamount").value = Math.ceil(parseFloat(document.getElementById("amount").value) + 
		parseFloat(document.getElementById("deliverycharges").value) - discountAmount);
	

}
	

function Add(itemValue) {
  
	var array = itemValue.split(":"); 
	var itemName=array[0];
	var weight=array[1];
	var price=array[2];
	var itemExist=0;
	
	var table = document.getElementById("productstable");
	
	var tblSize = table.rows.length;
	
	for (var i = 0, row; row = table.rows[i]; i++) {
	   for (var j = 0, col; col = row.cells[j]; j++) {
			if(col.innerHTML.includes(itemName)){
			
				var oldQty= row.cells[1];
			   	row.deleteCell(1);
			   	var cell1 = row.insertCell(1);
			   	cell1.innerHTML= (parseInt(oldQty.innerHTML)+1).toString();
				cell1.style="text-align:right;";
				itemExist=1;
			}
	   }  
	}
  
	if(itemExist == 0)
	{
		var row = table.insertRow(tblSize);

		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);

		cell1.innerHTML ="<b style='color:#0774d2;font-weight:bold;'>" + itemName + "</b><br>Size:" + weight + "<br>Price:" + price;
		cell2.innerHTML = 1;
		cell2.style="text-align:right;";
		
		var addBtn = document.createElement('div');
		addBtn.innerHTML="<i class='fa fa-plus' style='font-size:16px'></i>";
		addBtn.style='font-weight:bold;color:green;text-align:center';
		addBtn.onclick = function(){
			Add(itemValue);
		};

		cell4.appendChild(addBtn);
		
		var removeBtn = document.createElement('div');
		removeBtn.style='font-weight:bold;color:red;text-align:center;cursor:pointer;';
		removeBtn.innerHTML="<i class='fa fa-minus'  style='font-size:16px'></i>";

		removeBtn.onclick = function(){
			removeItem(itemValue);		
		};
	
		cell3.appendChild(removeBtn);
	
		var tblSize = table.rows.length;
		$("#cart").find("sup").html((tblSize-1).toString());
		
		setTimeout(function(){ $('#itemadded').fadeIn() }, 1);
	
		document.getElementById('itemadded').innerHTML=' ** Product Added to cart...!';
		setTimeout(function(){ $('#itemadded').fadeOut() }, 2000);
		
		if(tblSize ==1)
		{
			document.getElementById("errorMessage").innerHTML="Please Add some products to cart to place order..!";
		}
		else
		{
			document.getElementById("errorMessage").innerHTML="";
		}
	}
	
	calculateWeightAndPrice(itemValue,"add");
	createProductsListForReport();
	
	
}
	
function removeItem(itemValue) {

	var array = itemValue.split(":"); 
	var itemName=array[0];
	var weight=array[1];
	var price=array[2];
	
	var table = document.getElementById("productstable");
	
	for (var i = 0, row; row = table.rows[i]; i++) {
	   for (var j = 0, col; col = row.cells[j]; j++) {
		   if(col.innerHTML.includes(itemName)){
			   
			   var oldQty= row.cells[1];
			   
			   if(oldQty.innerHTML == "1") {
					table.deleteRow(i);
				   
				   	var tblSize = table.rows.length;
				   
					$("#cart").find("sup").html((tblSize-1).toString());

					if(tblSize ==1)
					{
						document.getElementById("errorMessage").innerHTML="Please Add some products to place order..!";
					}
					else
					{
						document.getElementById("errorMessage").innerHTML="";
					}
			   }
			   else
			   {
				   	row.deleteCell(1);
			   		var cell1 = row.insertCell(1);
			   		cell1.innerHTML= (parseInt(oldQty.innerHTML)-1).toString();
				   	cell1.style="text-align:right;";
	
			   }
			  
			   calculateWeightAndPrice(itemValue,"remove");
			}
	   }  
	}
	
	createProductsListForReport();
	
}

function changeView()
{
	var x = document.getElementById("deliveryDetails");
	var y = document.getElementById("veiwdelivery");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.innerHTML="(Hide Details)";
  } else {
    x.style.display = "none";
	  y.innerHTML="(View Details)";
  }

}
function validateForm() {

  // var x1 = document.contact__form.name.value;
  //  var y1 = document.contact__form.email.value;
  //   var z1 = document.contact__form.mobile.value;
  // if ((x1 == "") &&(y1 == "" ||z1 == "")) {
  //   alert("Fill details properly");
  //   return false;
  // }
  alert("testing ");
  var nameText = $("#name").val();
  if(nameText == "")
  {
  	$("#name").focus();
  }
  //alert(nameText);
}

function createProductsListForReport()
{
	var table = document.getElementById("productstable");
	var tableReport = document.getElementById("productstableforreport");
	
	while(tableReport.rows.length > 0) {
		tableReport.deleteRow(0);
	}

	for (var i = 0, row; row = table.rows[i]; i++) {
		var insertRow = tableReport.insertRow(i);
	   	for (var j = 0, col; col = row.cells[j]; j++) {
			if(j<2)
			{
				var cell1 = insertRow.insertCell(j);
				cell1.innerHTML=col.innerHTML;
				if(j==1)
				{
					
					cell1.style="text-align:right;";
				}
			}
	   }  
	}
	
	document.getElementById("tableproductsText").value=document.getElementById("productstableforreport").innerHTML;
}

function verifyPinNo(strPin)
{
	
	if(strPin.length > 0)
	{
		if(strPin == "751001" ||
		   strPin == "751002" ||
		   strPin == "752056" ||
		   strPin == "768001" ||
		   strPin == "768006" ||
		   strPin == "769012" ||
		   strPin == "769001" || 
		   strPin == "769002" ||
		   strPin == "769003" ||
		   strPin == "769004" ||
		   strPin == "769005" ||
		   strPin == "769006" ||
		   strPin == "769007" ||
		   strPin == "769008" ||
		   strPin == "769014" ||
		   strPin == "769015" ||
		   strPin == "779004" ||
		   strPin == "768108"
		   
		)
		{
			verifyPinResult=true;
		}
		else
		{
			alert("We are very sorry to say:\n\n We are currently not providing services to your address...!\n\n Kindly contact our customer care for availing our services in your Location...!");
			document.getElementById("ppin").value="";
			document.getElementById("ppin").focus();
			document.getElementById("deliverycharges").value="0";

			verifyPinResult=false;
		}
	}
}
function calculateReferralDiscount()
{
	var strRC=document.getElementById("rcode").value;
	
	if(strRC == "BISPRA012020" ||
	   strRC == "PRASAH012020" ||
	   strRC == "MANMOH012020" ||
	   strRC == "YUVRAJ012020" ||
	   strRC == "SUNSAB012020" ||
	   strRC == "ASHROU012020" ||
	   strRC == "ROMANC012020" )
	{
		refferalCodeStatus=true;		
	}
	else
	{
		alert("Invalid Referal Code...!");
		refferalCodeStatus=false;
	}
	
	calculatePrices(0,0);
}