/**
 * Authentication
 */

const CSRF_TOKEN = document.querySelector(`meta[name=csrf-token]`)
const alias = document.querySelector(`[name=alias]`)
const username = document.querySelector(`[name=username]`)
const password = document.querySelector(`[name=password]`)
const passwordRetyped = document.querySelector(`[name=password-retyped]`)
const loginStatus = document.querySelector(`[id=login-status]`)
const submitButton = document.querySelector(`[id=submit-button]`)
const form = document.getElementsByTagName(`form`)

function viewPass(target) {
    let elem = document.querySelector(`#${target}`)
    let type = elem.type == 'password' ? 'text' : 'password'

    elem.type = type
}

function resetRegisterStatus() {
    loginStatus.innerHTML = `
        <div class="alert alert-light fade show" role="alert">&nbsp;</div>
    `
}

function formEnabled() {
    alias.disabled = false
    username.disabled = false
    password.disabled = false
    submitButton.disabled = false
    submitButton.classList.remove('btn-default')
    submitButton.classList.add('btn-primary')
    submitButton.innerHTML = `SIGN UP <i class="fas fa-sign-in"></i>`
}

function formDisabled() {
    alias.disabled = true
    username.disabled = true
    password.disabled = true
    submitButton.disabled = true
    submitButton.classList.remove('btn-primary')
    submitButton.classList.add('btn-default')
    submitButton.innerHTML = `<i class="fas fa-spinner fa-spin"></i> wait...`
}

function registerProcess(params = {}) {
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
        message = message ?? `Register Succeded! redirecting in <span id="sign-in-count">3</span>...`
    }

    loginStatus.innerHTML = `
        <div class="alert alert-${status} alert-dismissible">
            <span><i class="icon ${icon}"></i> ${message}</span>
        </div>
    `
}

const submitForm = async () => {
    formDisabled()

    if (alias.value == '' || username.value == '' || password.value == '' || passwordRetyped.value == '') {
        formEnabled()

        return
    }

    if (password.value != passwordRetyped.value) {
        formEnabled()

        return
    }

    const bundle = {
        url: '/api/v1/auth/register',
        auth: CSRF_TOKEN.getAttribute('content'),
        data: {
            alias: alias.value,
            username: username.value,
            password: password.value
        }
    }

    jsonPost(bundle).then((response) => {
        console.log(response)

        if (response.hasOwnProperty('error')) {

            formEnabled()

            if (response.has_errors == true) {
                registerProcess({
                    status: "danger",
                    field: response.error,
                    message: response.message,
                    icon: "fas fa-wifi"
                })

                return
            }

            registerProcess({
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
                    location.href = '/sign-in.html'
                }
            }, 1000);

            return
        }

        formEnabled()
        return

    }).catch((error) => {
        formEnabled()
        registerProcess({status:'danger', message:'connection error', icon:'fas fa-wifi'})
    })
}

alias.addEventListener('focus', () => {
    resetRegisterStatus()
})

alias.addEventListener('input', function(e) {
    let start = this.selectionStart
    let end = this.selectionEnd
    this.value = this.value.replace(/[^A-Za-z0-9._-]/g, '')
    this.value = this.value.replace(/\s+/g, '')
    this.value = this.value.toLowerCase()
    this.setSelectionRange(start, end)
})

username.addEventListener('focus', () => {
    resetRegisterStatus()
})

password.addEventListener('focus', function() {
    resetRegisterStatus()
})

password.addEventListener('input', function(e) {
    let start = this.selectionStart
    let end = this.selectionEnd
    this.value = this.value.replace(/\s+/g, '')
    this.setSelectionRange(start, end)
})

passwordRetyped.addEventListener('focus', function() {
    resetRegisterStatus()
})

passwordRetyped.addEventListener('input', function(e) {
    let start = this.selectionStart
    let end = this.selectionEnd
    this.value = this.value.replace(/\s+/g, '')
    this.setSelectionRange(start, end)
})

passwordRetyped.addEventListener('keyup', event => {
    if (event.keyCode === 13) submitForm()
})

submitButton.addEventListener('keyup', event => {
    if (event.keyCode === 13) submitForm()
})

submitButton.addEventListener('click', () => {
    submitForm()
})

// On load
// ----------------------- //

alias.focus()

resetRegisterStatus()

for (let i = 0; i < form.length; i++) {
    form[i].addEventListener('submit', event => {
        event.preventDefault()
    })
}

window.addEventListener('wheel', { passive: false })