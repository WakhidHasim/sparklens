<!-- <div style="margin: 150px auto; width: 720px; border: 1px solid black; padding: 200px;"> -->

<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
<script src="https://libs.zappar.com/zappar-aframe/0.2.3/zappar-aframe.js"></script>
<script src="https://unpkg.com/@zappar/zappar-aframe@1.0.1/dist/zappar-aframe.min.js"></script>

<a-scene>
    <a-entity camera zappar-camera></a-entity>
    <a-entity zappar-face id="muka_kita">
        <a-entity zappar-head-mask="face:#muka_kita"></a-entity>
        <a-gltf-model src="<?php echo base_url(); ?>assets/file_glb/glasses.glb" scale="0.82 0.7 0.7" position="0 0.15 0.8"></a-gltf-model>
    </a-entity>
</a-scene>
<!-- </div> -->