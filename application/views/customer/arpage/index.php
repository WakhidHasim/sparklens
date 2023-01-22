<!-- <div style="margin: 150px auto; width: 720px; border: 1px solid black; padding: 200px;"> -->
<a-scene>
    <a-entity camera zappar-camera></a-entity>
    <a-entity zappar-face id="muka_kita">

        <a-entity zappar-head-mask="face:#muka_kita"></a-entity>

        <a-gltf-model src="<?php echo base_url(); ?>assets/AR/1/scene.gltf" scale="0.51 0.51 0.51" position="0 0.03 0.8"></a-gltf-model>

    </a-entity>
</a-scene>
<!-- </div> -->