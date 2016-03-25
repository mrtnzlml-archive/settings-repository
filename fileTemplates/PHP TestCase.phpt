<?php

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

require __DIR__ . '/../bootstrap.php';

class ${NAME} extends \Tester\TestCase {

}

(new ${NAME})->run();
