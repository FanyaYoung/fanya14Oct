function trim(str){
   return str.replace(/^\s*|\s*$/g,"");
}
function chkform()
{

	frminfo=document.myForm;
	
	if(trim(frminfo.name.value)=='')
	{
		alert('Please specify Your Name');
		frminfo.name.focus();
		return false
	}
	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(trim(frminfo.email.value))))
	{
		alert('Please specify Valid Email Address');
		frminfo.email.focus();
		return false;
	}
	if(trim(frminfo.message.value)=='')
	{
		alert('Please specify Your Message');
		frminfo.message.focus();
		return false
	}
	
	return true;
}
