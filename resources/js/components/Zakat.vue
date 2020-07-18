<template>
  <div>
    <section class="payment zakat-payment">
      <div class="content-box container" id="zakat-form">
        <ul>
            <li v-for="step in steps">
                <span @click="currentStep = step">@{{ step }}</span>
            </li>
        </ul>
      </div>
    </section>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
