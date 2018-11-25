<template>
    <div class="field p-t-lg">
        <div class="control"
            :class="position == 'center' ? 'has-text-centered' : '' ">
            <a href="/view/resume.pdf">
                <button class="button is-link">Download Resume</button>
            </a>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Resume',
    props: {
        position: ''
    }
}
</script>

