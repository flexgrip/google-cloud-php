<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace GPBMetadata\Google\Cloud\Videointelligence\V1;

class VideoIntelligence
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad84a0a3a676f6f676c652f636c6f75642f766964656f696e74656c6c6967656e63652f76312f766964656f5f696e74656c6c6967656e63652e70726f746f1221676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22fe010a14416e6e6f74617465566964656f5265717565737412110a09696e7075745f75726918012001280912150a0d696e7075745f636f6e74656e7418062001280c12410a08666561747572657318022003280e322a2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e466561747572654203e0410212460a0d766964656f5f636f6e7465787418032001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f436f6e7465787412170a0a6f75747075745f7572691804200128094203e0410112180a0b6c6f636174696f6e5f69641805200128094203e0410122c1060a0c566964656f436f6e7465787412410a087365676d656e747318012003280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7412570a166c6162656c5f646574656374696f6e5f636f6e66696718022001280b32372e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c446574656374696f6e436f6e66696712620a1c73686f745f6368616e67655f646574656374696f6e5f636f6e66696718032001280b323c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e53686f744368616e6765446574656374696f6e436f6e666967126c0a216578706c696369745f636f6e74656e745f646574656374696f6e5f636f6e66696718042001280b32412e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4578706c69636974436f6e74656e74446574656374696f6e436f6e66696712550a15666163655f646574656374696f6e5f636f6e66696718052001280b32362e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e46616365446574656374696f6e436f6e66696712610a1b7370656563685f7472616e736372697074696f6e5f636f6e66696718062001280b323c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e5370656563685472616e736372697074696f6e436f6e66696712550a15746578745f646574656374696f6e5f636f6e66696718082001280b32362e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e54657874446574656374696f6e436f6e66696712590a17706572736f6e5f646574656374696f6e5f636f6e666967180b2001280b32382e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e506572736f6e446574656374696f6e436f6e66696712570a166f626a6563745f747261636b696e675f636f6e666967180d2001280b32372e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4f626a656374547261636b696e67436f6e66696722dd010a144c6162656c446574656374696f6e436f6e66696712530a146c6162656c5f646574656374696f6e5f6d6f646518012001280e32352e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c446574656374696f6e4d6f646512190a1173746174696f6e6172795f63616d657261180220012808120d0a056d6f64656c18032001280912220a1a6672616d655f636f6e666964656e63655f7468726573686f6c6418042001280212220a1a766964656f5f636f6e666964656e63655f7468726573686f6c64180520012802222a0a1953686f744368616e6765446574656374696f6e436f6e666967120d0a056d6f64656c18012001280922250a144f626a656374547261636b696e67436f6e666967120d0a056d6f64656c18012001280922600a1346616365446574656374696f6e436f6e666967120d0a056d6f64656c180120012809121e0a16696e636c7564655f626f756e64696e675f626f786573180220012808121a0a12696e636c7564655f6174747269627574657318052001280822730a15506572736f6e446574656374696f6e436f6e666967121e0a16696e636c7564655f626f756e64696e675f626f786573180120012808121e0a16696e636c7564655f706f73655f6c616e646d61726b73180220012808121a0a12696e636c7564655f61747472696275746573180320012808222f0a1e4578706c69636974436f6e74656e74446574656374696f6e436f6e666967120d0a056d6f64656c180120012809223c0a1354657874446574656374696f6e436f6e66696712160a0e6c616e67756167655f68696e7473180120032809120d0a056d6f64656c18022001280922780a0c566964656f5365676d656e7412340a1173746172745f74696d655f6f666673657418012001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e12320a0f656e645f74696d655f6f666673657418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e22640a0c4c6162656c5365676d656e7412400a077365676d656e7418012001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7412120a0a636f6e666964656e636518022001280222500a0a4c6162656c4672616d65122e0a0b74696d655f6f666673657418012001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e12120a0a636f6e666964656e636518022001280222470a06456e7469747912110a09656e746974795f696418012001280912130a0b6465736372697074696f6e18022001280912150a0d6c616e67756167655f636f646518032001280922a5020a0f4c6162656c416e6e6f746174696f6e12390a06656e7469747918012001280b32292e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e456e7469747912440a1163617465676f72795f656e74697469657318022003280b32292e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e456e7469747912410a087365676d656e747318032003280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c5365676d656e74123d0a066672616d657318042003280b322d2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c4672616d65120f0a0776657273696f6e1805200128092295010a144578706c69636974436f6e74656e744672616d65122e0a0b74696d655f6f666673657418012001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e124d0a16706f726e6f6772617068795f6c696b656c69686f6f6418022001280e322d2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c696b656c69686f6f6422750a194578706c69636974436f6e74656e74416e6e6f746174696f6e12470a066672616d657318012003280b32372e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4578706c69636974436f6e74656e744672616d65120f0a0776657273696f6e18022001280922510a154e6f726d616c697a6564426f756e64696e67426f78120c0a046c656674180120012802120b0a03746f70180220012802120d0a057269676874180320012802120e0a06626f74746f6d18042001280222770a1746616365446574656374696f6e416e6e6f746174696f6e12380a06747261636b7318032003280b32282e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e547261636b12110a097468756d626e61696c18042001280c120f0a0776657273696f6e18052001280922660a19506572736f6e446574656374696f6e416e6e6f746174696f6e12380a06747261636b7318012003280b32282e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e547261636b120f0a0776657273696f6e180220012809224f0a0b466163655365676d656e7412400a077365676d656e7418012001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e74229c010a09466163654672616d65125b0a196e6f726d616c697a65645f626f756e64696e675f626f78657318012003280b32382e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f726d616c697a6564426f756e64696e67426f78122e0a0b74696d655f6f666673657418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e3a02180122a7010a0e46616365416e6e6f746174696f6e12110a097468756d626e61696c18012001280c12400a087365676d656e747318022003280b322e2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e466163655365676d656e74123c0a066672616d657318032003280b322c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e466163654672616d653a02180122ba020a1154696d657374616d7065644f626a65637412590a176e6f726d616c697a65645f626f756e64696e675f626f7818012001280b32382e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f726d616c697a6564426f756e64696e67426f78122e0a0b74696d655f6f666673657418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e124d0a0a6174747269627574657318032003280b32342e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e44657465637465644174747269627574654203e04101124b0a096c616e646d61726b7318042003280b32332e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e44657465637465644c616e646d61726b4203e041012284020a05547261636b12400a077365676d656e7418012001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7412510a1374696d657374616d7065645f6f626a6563747318022003280b32342e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e54696d657374616d7065644f626a656374124d0a0a6174747269627574657318032003280b32342e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e44657465637465644174747269627574654203e0410112170a0a636f6e666964656e63651804200128024203e0410122440a114465746563746564417474726962757465120c0a046e616d6518012001280912120a0a636f6e666964656e6365180220012802120d0a0576616c756518032001280922780a1044657465637465644c616e646d61726b120c0a046e616d6518012001280912420a05706f696e7418022001280b32332e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f726d616c697a656456657274657812120a0a636f6e666964656e636518032001280222e90a0a16566964656f416e6e6f746174696f6e526573756c747312110a09696e7075745f75726918012001280912400a077365676d656e74180a2001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7412550a197365676d656e745f6c6162656c5f616e6e6f746174696f6e7318022003280b32322e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c416e6e6f746174696f6e125e0a227365676d656e745f70726573656e63655f6c6162656c5f616e6e6f746174696f6e7318172003280b32322e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c416e6e6f746174696f6e12520a1673686f745f6c6162656c5f616e6e6f746174696f6e7318032003280b32322e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c416e6e6f746174696f6e125b0a1f73686f745f70726573656e63655f6c6162656c5f616e6e6f746174696f6e7318182003280b32322e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c416e6e6f746174696f6e12530a176672616d655f6c6162656c5f616e6e6f746174696f6e7318042003280b32322e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c416e6e6f746174696f6e124f0a10666163655f616e6e6f746174696f6e7318052003280b32312e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e46616365416e6e6f746174696f6e42021801125e0a1a666163655f646574656374696f6e5f616e6e6f746174696f6e73180d2003280b323a2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e46616365446574656374696f6e416e6e6f746174696f6e12490a1073686f745f616e6e6f746174696f6e7318062003280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7412590a136578706c696369745f616e6e6f746174696f6e18072001280b323c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4578706c69636974436f6e74656e74416e6e6f746174696f6e12550a157370656563685f7472616e736372697074696f6e73180b2003280b32362e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e5370656563685472616e736372697074696f6e124b0a10746578745f616e6e6f746174696f6e73180c2003280b32312e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e54657874416e6e6f746174696f6e12570a126f626a6563745f616e6e6f746174696f6e73180e2003280b323b2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4f626a656374547261636b696e67416e6e6f746174696f6e12620a1c6c6f676f5f7265636f676e6974696f6e5f616e6e6f746174696f6e7318132003280b323c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c6f676f5265636f676e6974696f6e416e6e6f746174696f6e12620a1c706572736f6e5f646574656374696f6e5f616e6e6f746174696f6e7318142003280b323c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e506572736f6e446574656374696f6e416e6e6f746174696f6e12210a056572726f7218092001280b32122e676f6f676c652e7270632e537461747573226e0a15416e6e6f74617465566964656f526573706f6e736512550a12616e6e6f746174696f6e5f726573756c747318012003280b32392e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f416e6e6f746174696f6e526573756c747322a6020a17566964656f416e6e6f746174696f6e50726f677265737312110a09696e7075745f75726918012001280912180a1070726f67726573735f70657263656e74180220012805122e0a0a73746172745f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122f0a0b7570646174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70123b0a076665617475726518052001280e322a2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4665617475726512400a077365676d656e7418062001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7422700a15416e6e6f74617465566964656f50726f677265737312570a13616e6e6f746174696f6e5f70726f677265737318012003280b323a2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f416e6e6f746174696f6e50726f67726573732281030a195370656563685472616e736372697074696f6e436f6e666967121a0a0d6c616e67756167655f636f64651801200128094203e04102121d0a106d61785f616c7465726e6174697665731802200128054203e04101121d0a1066696c7465725f70726f66616e6974791803200128084203e04101124e0a0f7370656563685f636f6e746578747318042003280b32302e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e537065656368436f6e746578744203e0410112290a1c656e61626c655f6175746f6d617469635f70756e6374756174696f6e1805200128084203e0410112190a0c617564696f5f747261636b731806200328054203e0410112270a1a656e61626c655f737065616b65725f64696172697a6174696f6e1807200128084203e0410112260a1964696172697a6174696f6e5f737065616b65725f636f756e741808200128054203e0410112230a16656e61626c655f776f72645f636f6e666964656e63651809200128084203e0410122250a0d537065656368436f6e7465787412140a07706872617365731801200328094203e041012288010a135370656563685472616e736372697074696f6e12550a0c616c7465726e61746976657318012003280b323f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e5370656563685265636f676e6974696f6e416c7465726e6174697665121a0a0d6c616e67756167655f636f64651802200128094203e04103228c010a1c5370656563685265636f676e6974696f6e416c7465726e617469766512120a0a7472616e73637269707418012001280912170a0a636f6e666964656e63651802200128024203e04103123f0a05776f72647318032003280b322b2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e576f7264496e666f4203e0410322a7010a08576f7264496e666f122d0a0a73746172745f74696d6518012001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e122b0a08656e645f74696d6518022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e120c0a04776f726418032001280912170a0a636f6e666964656e63651804200128024203e0410312180a0b737065616b65725f7461671805200128054203e0410322280a104e6f726d616c697a656456657274657812090a017818012001280212090a0179180220012802225f0a164e6f726d616c697a6564426f756e64696e67506f6c7912450a08766572746963657318012003280b32332e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f726d616c697a656456657274657822a1010a0b546578745365676d656e7412400a077365676d656e7418012001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e7412120a0a636f6e666964656e6365180220012802123c0a066672616d657318032003280b322c2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e546578744672616d652294010a09546578744672616d6512570a14726f74617465645f626f756e64696e675f626f7818012001280b32392e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f726d616c697a6564426f756e64696e67506f6c79122e0a0b74696d655f6f666673657418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e22710a0e54657874416e6e6f746174696f6e120c0a047465787418012001280912400a087365676d656e747318022003280b322e2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e546578745365676d656e74120f0a0776657273696f6e18032001280922a0010a134f626a656374547261636b696e674672616d6512590a176e6f726d616c697a65645f626f756e64696e675f626f7818012001280b32382e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f726d616c697a6564426f756e64696e67426f78122e0a0b74696d655f6f666673657418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e22a8020a184f626a656374547261636b696e67416e6e6f746174696f6e12420a077365676d656e7418032001280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e74480012120a08747261636b5f6964180520012803480012390a06656e7469747918012001280b32292e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e456e7469747912120a0a636f6e666964656e636518042001280212460a066672616d657318022003280b32362e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4f626a656374547261636b696e674672616d65120f0a0776657273696f6e180620012809420c0a0a747261636b5f696e666f22d3010a194c6f676f5265636f676e6974696f6e416e6e6f746174696f6e12390a06656e7469747918012001280b32292e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e456e7469747912380a06747261636b7318022003280b32282e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e547261636b12410a087365676d656e747318032003280b322f2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f5365676d656e742af5010a074665617475726512170a13464541545552455f554e535045434946494544100012130a0f4c4142454c5f444554454354494f4e100112190a1553484f545f4348414e47455f444554454354494f4e1002121e0a1a4558504c494349545f434f4e54454e545f444554454354494f4e100312120a0e464143455f444554454354494f4e100412180a145350454543485f5452414e534352495054494f4e100612120a0e544558545f444554454354494f4e100712130a0f4f424a4543545f545241434b494e47100912140a104c4f474f5f5245434f474e4954494f4e100c12140a10504552534f4e5f444554454354494f4e100e2a720a124c6162656c446574656374696f6e4d6f646512240a204c4142454c5f444554454354494f4e5f4d4f44455f554e5350454349464945441000120d0a0953484f545f4d4f44451001120e0a0a4652414d455f4d4f4445100212170a1353484f545f414e445f4652414d455f4d4f444510032a740a0a4c696b656c69686f6f64121a0a164c494b454c49484f4f445f554e535045434946494544100012110a0d564552595f554e4c494b454c591001120c0a08554e4c494b454c591002120c0a08504f535349424c451003120a0a064c494b454c591004120f0a0b564552595f4c494b454c59100532c0020a18566964656f496e74656c6c6967656e63655365727669636512cd010a0d416e6e6f74617465566964656f12372e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e416e6e6f74617465566964656f526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e226482d3e493021822132f76312f766964656f733a616e6e6f746174653a012ada4112696e7075745f7572692c6665617475726573ca412e0a15416e6e6f74617465566964656f526573706f6e73651215416e6e6f74617465566964656f50726f67726573731a54ca4120766964656f696e74656c6c6967656e63652e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d428b020a25636f6d2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e7631421d566964656f496e74656c6c6967656e63655365727669636550726f746f50015a52676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f766964656f696e74656c6c6967656e63652f76313b766964656f696e74656c6c6967656e6365aa0221476f6f676c652e436c6f75642e566964656f496e74656c6c6967656e63652e5631ca0221476f6f676c655c436c6f75645c566964656f496e74656c6c6967656e63655c5631ea0224476f6f676c653a3a436c6f75643a3a566964656f496e74656c6c6967656e63653a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

