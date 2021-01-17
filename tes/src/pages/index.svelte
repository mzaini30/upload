<svelte:head>
	<title>Upload</title>
</svelte:head>

<div class="container mt-3">
	<form on:submit|preventDefault={kirim}>
		<div class="mb-3">
			<input type="file" name="" bind:files required>
		</div>
		<div class="mb-3">
			<input type="submit" value="Kirim" class="btn btn-success" name="">
		</div>
	</form>
	<div class="mb-3">
		<input type="" class="form-control" readonly placeholder="Link filenya" value={linkFile} name="">
	</div>
</div>

<script type="text/javascript">
	// $: console.log(files[0])
	let linkFile = ''
	let files
	const apiFile = 'http://localhost/upload/'
	const kirim = async () => {
		const body = new FormData
		body.append('file', 'halo')
		console.log(files[0])
		// body.append('file', files[0])
		let mulaiKirim = await fetch(apiFile, {
			method: 'post',
			body
			// headers: {
			// 	'Content-Type': 'multipart/form-data'
			// }
		}).then(x => x.json())
		mulaiKirim = await mulaiKirim
		linkFile = mulaiKirim
	}
</script>