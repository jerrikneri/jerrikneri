<template>
    <div class="field p-t-lg">
        <div class="control has-text-black"
            :class="position == 'center' ? 'has-text-centered' : '' ">
            <a href="/view/resume.pdf">
                <button class="button is-link has-text-black">View Resume</button>
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

