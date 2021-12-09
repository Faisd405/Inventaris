<template>
    <div>

    </div>
</template>

<script>
    import { QrStream, QrCapture, QrDropzone } from 'vue3-qr-reader';

    export default {
        components: {
            QrStream,
            QrCapture,
            QrDropzone,
        },
        data() {
            return {
                qrResult: '',
                qrResultType: '',
                qrResultString: '',
            }
        },
        methods: {
            onQrResult(result) {
                this.qrResult = result;
                this.qrResultType = result.type;
                this.qrResultString = result.string;
            },
        },
    }
</script>
