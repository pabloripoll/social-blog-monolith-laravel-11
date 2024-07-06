/**
 * JS Support Script
 *
 */

const jsonGet = async (bundle) => {
    const request = await fetch(bundle.url, {
        method  : 'GET',
        headers : {
            'X-CSRF-TOKEN'  : bundle.auth,
            Accept          : "application/json",
            dataType        : "json",
            contentType     : 'application/json',
        }
    })
    const response = await request.json()

    return response
}

const jsonPost = async (bundle) => {
    const request = await fetch(bundle.url, {
        method  : 'POST',
        headers : {
            'X-CSRF-TOKEN'  : bundle.auth,
            Accept          : "application/json",
            dataType        : "json",
            contentType     : 'application/json',
        },
        body : JSON.stringify(bundle.data)
    })
    const response = await request.json()

    return response
}

const formPost = async (bundle) => {
    formData = new FormData()
    formData.append('_token', CSRF_TOKEN)
    if (bundle.function) formData.append('function', bundle.function)
    if (bundle.action) formData.append('action', bundle.action)
    if (bundle.json) formData.append('json', JSON.stringify(bundle.json))
    formData.append('enctype', 'multipart/form-data')
    if (bundle.files) {
        files = bundle.files
        for (let i = 0; i < files.length; i++) {
            formData.append([i], files[i])
        }
    }
    const request = await fetch(bundle.url, {
        mode: 'no-cors',
        method: 'POST',
        body: formData,
        headers: {
            "Access-Control-Allow-Origin": "*",
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
    })
    const response = await request.json()

    return response
}
