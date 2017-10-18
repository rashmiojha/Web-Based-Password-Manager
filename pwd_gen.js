


function generateStrongPassword(length)
{
	var  add_dashes = false;
	var available_sets = 'luds';
	var sets = new Array();
	if(indexOf(available_sets, 'l') !== -1)
		sets.push('abcdefghjkmnpqrstuvwxyz');
	if(indexOf(available_sets, 'u') !== -1)
		sets.push('ABCDEFGHJKMNPQRSTUVWXYZ');
	if(indexOf(available_sets, 'd') !== -1)
		sets.push('23456789');
	if(strpos(available_sets, 's') !== -1)
		sets.push('!@#$%&*?');
	var all = '';
	var password = '';
	var set;
	for(set in sets)
	{
		password += set[array_rand(split(set))];
		all += set;
	}

	all = split(all);
	for(i = 0; i < length - sets.length; i++)
		password += all[array_rand(all)];

	password = str_shuffle(password);

	if(!add_dashes)
		return password;

	dash_len = floor(sqrt(length));
	dash_str = '';
	while(password.length > dash_len)
	{
		dash_str += password.substr(0, dash_len) . '-';
		password = password.substr(dash_len);
	}
	dash_str += password;
	return dash_str;
}

