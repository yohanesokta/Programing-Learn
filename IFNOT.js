const UserDaftar = (angkapertama , angkakedua) =>{

	const jumlah = (angkapertama ?? 0) + (angkakedua ?? 0)
	return jumlah
}

console.log(UserDaftar())