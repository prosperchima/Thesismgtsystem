function errclose(){$(".err").slideUp(500);}


function getScript(url,func)
	{
		var xmlhttp;
	
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4)
			{
				//alert(xmlhttp.responseText);
    	        var ret = xmlhttp.responseText.split("`");
				if(ret.length < 2)
				{
					func(xmlhttp.responseText,"error");
				}
				else if(ret[0].trim() == "done")
				{
					func(ret[1],"done");
				}
				else
				{
					func(xmlhttp.responseText,"error");
				}
			}
		}
		xmlhttp.open("GET","repository/scripts/"+url,true);
		xmlhttp.send();
	}
	
	function postScript(url, data, func)
	{
	    var params = typeof data == 'string' ? data : Object.keys(data).map(
	            function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
	        ).join('&');
	
	    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
	    xhr.open('POST', "repository/scripts/"+url);
	    xhr.onreadystatechange = function() {
	        if(xhr.readyState > 3 && xhr.status==200)
			{
				if(xhr.readyState == 4)
				{
					func(xhr.responseText, "done");
				}
			}
	    };
	    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	    xhr.send(params);
	}
	
	
	function fill(url,container,errormsg)
	{
		var xmlhttp;
	
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4)
			{
    	        var ret = xmlhttp.responseText.split("`");
				if(ret[0].trim() == "done")
				{
					$(container).html(ret[1]);
				}
				else
				{
					if(errormsg != null)
					{
						$(container).html(errormsg);
					}
					else
					{
						$(container).html(xmlhttp.responseText);
					}
				}
			}
		}
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function btnDanger(e)
{
	$(e).removeClass("btn-warning");
	$(e).removeClass("btn-success");
	$(e).removeClass("btn-info");
	$(e).addClass("btn-danger");
}

function btnSuccess(e)
{
	$(e).removeClass("btn-warning");
	$(e).addClass("btn-success");
	$(e).removeClass("btn-info");
	$(e).removeClass("btn-danger");
}

function btnInfo(e)
{
	$(e).removeClass("btn-warning");
	$(e).removeClass("btn-success");
	$(e).addClass("btn-info");
	$(e).removeClass("btn-danger");
}

function btnWarning(e)
{
	$(e).addClass("btn-warning");
	$(e).removeClass("btn-success");
	$(e).removeClass("btn-info");
	$(e).removeClass("btn-danger");
}



function lostf(e,a)
{
	var arg;
	if((e != "text") && (e != "number"))
	{
		var arg = $('#'+e).val();
	}
	else
	{
		var arg = $('#'+a).val();
	}
	
	
	if(arg == "")
	{
		if((e == "text") || (e  == "number"))
		{
			error(a); return;
		}
		else
		{
			error(e); return;
		}
	}
	
	if(e == "dbirth")
	{
		var n = arg.split('-');
		
		if(n.length < 3)
		{
			error(e);
		}
		else
		{
			if((!parseInt(n[0])) || (!parseInt(n[0])) || (!parseInt(n[0])))
			{
				error(e);
			}
			else
			{
				success(e);
			}
		}
	}
	
	if(e == "name")
	{
		var n = arg.split(' ');
		
		if(n.length < 2)
		{
			warning(e);
		}
		else
		{
			success(e);
		}
	}
	if(e == "email")
	{
		 var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!regex.test(arg))
		{
			error(e);
		}
		else
		{
			success(e);
		}
	}
	
	if(e == "email-phone")
	{
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if((!regex.test(arg)) && (arg.length != 11))
		{
			error(e);
		}
		else
		{
			success(e);
		}
	}
	
	if(e == "pass")
	{
		if(arg.length > 5)
		{
			success(e);
		}
		else
		{
			warning(e);
		}
	}
	
	if(e == "text")
	{
		if(arg != "")
		{
			success(a);
		}
		else
		{
			error(a);
		}
	}
	if(e == "number")
	{
		if(parseInt(arg) != null)
		{
			success(a);
		}
		else
		{
			error(a);
		}
	}
	if(e == "conf")
	{
		if((arg == $('#pass').val()) && (arg.length > 5))
		{
			success(e);
			success('pass');
		}
		else
		{
			warning(e);
			warning('pass');
		}
	}
	if(e == "phone")
	{
		if(arg.length != 11)
		{
			warning(e);
		}
		else
		{
			success(e);
		}
	}
}


function error(e)
{
	$('#'+e+'-group').removeClass('has-warning');
	$('#'+e+'-group').removeClass('has-success');
	$('#'+e+'-icon').removeClass('fa-check');
	$('#'+e+'-icon').removeClass('fa-exclamation-circle');
	$('#'+e+'-icon').addClass('fa-close');
	$('#'+e+'-group').addClass('has-error');
}
function success(e)
{
	$('#'+e+'-group').removeClass('has-error');
	$('#'+e+'-group').removeClass('has-warning');
	$('#'+e+'-icon').removeClass('fa-close');
	$('#'+e+'-icon').removeClass('fa-exclamation-circle');
	$('#'+e+'-icon').addClass('fa-check');
	$('#'+e+'-group').addClass('has-success');
}
function warning(e)
{
	$('#'+e+'-group').removeClass('has-error');
	$('#'+e+'-group').removeClass('has-success');
	$('#'+e+'-icon').removeClass('fa-check');
	$('#'+e+'-icon').removeClass('fa-close');
	$('#'+e+'-group').addClass('has-warning');
	$('#'+e+'-icon').addClass('fa-exclamation-circle');
}

function clerr(e)
{
	$('#'+e+'-group').removeClass('has-warning');
	$('#'+e+'-group').removeClass('has-success');
	$('#'+e+'-group').removeClass('has-error');
	$('#'+e+'-icon').removeClass('fa-close');
	$('#'+e+'-icon').removeClass('fa-check');
	$('#'+e+'-icon').removeClass('fa-exclamation-circle');
	$('#err').hide();
	document.getElementById('subbt').disabled = false;
}

function empterr()
{
	$('#err').removeClass('alert-info');
	$('#err').removeClass('alert-danger');
	$('#err').removeClass('alert-success');
	$('#err').removeClass('alert-warning');
}


function runErrInfo(btn,msg,tm)
{
	if(tm == undefined)
	{
		tm = 3000;
	}
	
	var store = $(btn).html();
	
	$(btn).html(msg);
	btnDanger(btn);
	
	setTimeout(function(){
		$(btn).html(store);
		btnInfo(btn);
	},tm);
}


function runErrWarning(btn,msg,tm)
{
	if(tm == undefined)
	{
		tm = 3000;
	}
	
	var store = $(btn).html();
	
	$(btn).html(msg);
	btnDanger(btn);
	
	setTimeout(function(){
		$(btn).html(store);
		btnWarning(btn);
	},tm);
}


function runErrSuccess(btn,msg,tm)
{
	if(tm == undefined)
	{
		tm = 3000;
	}
	
	var store = $(btn).html();
	
	$(btn).html(msg);
	btnDanger(btn);
	
	setTimeout(function(){
		$(btn).html(store);
		btnSuccess(btn);
	},tm);
}


function runErrDanger(btn,msg,tm)
{
	if(tm == undefined)
	{
		tm = 3000;
	}
	
	var store = $(btn).html();
	
	$(btn).html(msg);
	btnDanger(btn);
	
	setTimeout(function(){
		$(btn).html(store);
	},tm);
}



function setCookie(cname, cValue, cExpire)
{
	var d = new Date();
	d.setTime(d.getTime() + cExpire);
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" +cValue + ";" + expires + ";path=/";
}

function getCookie(cname)
{
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	
	for(var i =0; i < ca.length; i++)
	{
		var c = ca[i].trim();
		var f = c.split('=');
		if(f[0] == cname)
		{
			return f[1];
		}
	}
	return "";
}


function btnError(btn, msg, tm)
{
	$(btn).prop("disabled",true);
	var st = $(btn).html();
	$(btn).removeClass("loading");
	$(btn).html(msg);
	$(btn).addClass("negative");
	
	setTimeout(function(){
		$(btn).html(st);
		$(btn).removeClass("negative");
		$(btn).prop("disabled",false);
	}, tm);
}