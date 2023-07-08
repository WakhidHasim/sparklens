<!--AR START HERE -->
<a-scene>
    <a-entity camera zappar-camera></a-entity>
    <a-entity zappar-face id="muka_kita">
        <a-entity zappar-head-mask="face:#muka_kita"></a-entity>
        <a-gltf-model src="<?= base_url() ?>asset/glb_files/<?= $product['glb'] ?>" scale="<?= $product['scale'] ?>" position="<?= $product['position'] ?>" rotation="<?= $product['rotation'] ?>"></a-gltf-model>
    </a-entity>
</a-scene>
<!--AR END HERE -->