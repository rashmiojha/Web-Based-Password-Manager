


function generateStrongPassword(length)
{
	var  add_dashes = false;
	var available_sets = "luds";
	var sets = new Array();

	if(available_sets.indexOf("l") !== -1)
		sets.push('abcdefghjkmnpqrstuvwxyz');
	if(available_sets.indexOf("u") !== -1)
		sets.push('ABCDEFGHJKMNPQRSTUVWXYZ');
	if(available_sets.indexOf("d") !== -1)
		sets.push('23456789');
	if(available_sets.indexOf("s") !== -1)
		sets.push('!@#$%&*?');
	var all = '';
	var password = '';
	var set;
	for(set in sets)
	{
		password += set[array_rand(set.split())];
		all += set;
	}

	all = all.split();
	for(var i = 0; i < length - sets.length; i++)
		password += all[array_rand(all)];

	password = str_shuffle(password);
	console.log(password);
	var str;
	for (var i = 0; i < password.length; i += 2)
          str += String.fromCharCode(parseInt(password.substr(i, 2), 16)); 
      console.log(str);
	if(!add_dashes)
		return str;

	dash_len = floor(sqrt(length));
	dash_str = '';
	while(password.length > dash_len)
	{
		dash_str += password.substr(0, dash_len)+ '-';
		password = password.substr(dash_len);
	}
	dash_str += password;
	return dash_str;
}

