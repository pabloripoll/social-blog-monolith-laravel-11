/**
 * Authentication
 */

const CSRF_TOKEN = document.querySelector(`meta[name=csrf-token]`)
const username = document.querySelector(`[name=username]`)
const password = document.querySelector(`[name=password]`)
const loginStatus = document.querySelector(`[id=login-status]`)
const submitButton = document.querySelector(`[id=submit-button]`)
const form = document.getElementsByTagName(`form`)

function resetLoginStatus() {
    loginStatus.innerHTML = `<div class="alert alert-light fade show" role="alert">&nbsp;</div>`
}

function formEnabled() {
    username.disabled = false
    password.disabled = false
    submitButton.disabled = false
    submitButton.classList.remove('btn-default')
    submitButton.classList.add('btn-primary')
    submitButton.innerHTML = `SIGN IN <i class="fas fa-sign-in"></i>`
}

function formDisabled() {
    username.disabled = true
    password.disabled = true
    submitButton.disabled = true
    submitButton.classList.remove('btn-primary')
    submitButton.classList.add('btn-default')
    submitButton.innerHTML = `<i class="fas fa-spinner fa-spin"></i> wait...`
}

function loginProcess(params = {}) {
    let icon = params.icon ?? ''
    let field = params.field ?? null
    let status = params.status ?? 'default'
    let message = params.message ?? null

    if (field) {
        document.querySelector(`#${field}`).focus()
    }

    if (status == 'default') {
        message = message ?? `&nbsp;`
    }

    if (status == 'warning') {
        icon = icon ?? `fas fa-check`
        message = message ?? `Complete ${field}`
    }

    if (status == 'danger') {
        icon = icon ?? `fas fa-check`
        message = message ?? `Error on field ${field}`
    }

    if (status == 'success') {
        icon = icon ?? `fas fa-check`
        message = message ?? `Login Succeded! redirecting in <span id="sign-in-count">3</span>...`
    }

    loginStatus.innerHTML = `
        <div class="alert alert-${status} alert-dismissible">
            <span><i class="icon ${icon}"></i> ${message}</span>
        </div>
    `
}

const submitForm = async () => {
    formDisabled()

    if (username.value == '' || password.value == '') {
        formEnabled()

        return
    }

    const bundle = {
        url: '/api/v1/auth/login',
        auth: CSRF_TOKEN.getAttribute('content'),
        data: {
            username: username.value,
            password: password.value
        }
    }

    jsonPost(bundle).then((response) => {

        if (response.hasOwnProperty('error')) {

            formEnabled()

            if (response.has_errors == true) {
                loginProcess({
                    status: "danger",
                    field: response.error,
                    message: response.message,
                    icon: "fas fa-wifi"
                })

                return
            }


            loginProcess({
                status: "warning",
                message: response.message,
                icon: "fas fa-wifi"
            })

            return
        }

        if (response.hasOwnProperty('success')) {

            registerProcess({
                status: "success"
            })

            let time = 4
            let counter = setInterval(() => {
                time--;
                document.querySelector('#sign-in-count').innerHTML = time
                if (time == 0) {
                    clearInterval(counter)
                    location.href = ''
                }
            }, 1000);

            return
        }

        formEnabled()
        return

    }).catch((error) => {
        formEnabled()
        loginProcess({status:'danger', message:'connection error', icon:'fas fa-wifi'})
    })
}

username.addEventListener('focus', () => {
    resetLoginStatus()
})

password.addEventListener('focus', function() {
    resetLoginStatus()
})

password.addEventListener('keyup', event => {
    if (event.keyCode === 13) submitForm()
})

password.addEventListener('input', function(e) {
    let start = this.selectionStart
    let end = this.selectionEnd
    this.value = this.value.replace(/\s+/g, '')
    this.setSelectionRange(start, end)
})

submitButton.addEventListener('keyup', event => {
    if (event.keyCode === 13) submitForm()
})

submitButton.addEventListener('click', () => {
    submitForm()
})

// On load
// ----------------------- //

username.focus()

resetLoginStatus()

for (let i = 0; i < form.length; i++) {
    form[i].addEventListener('submit', event => {
        event.preventDefault()
    })
}

window.addEventListener('wheel', { passive: false })