<?php

return array (
  'chains' => 
  array (
    'abstractTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 11124,
      'name' => 'Abstract Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.testnet.abs.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Abstract Block Explorer',
          'url' => 'https://explorer.testnet.abs.xyz',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
          'blockCreated' => 358349,
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 431682,
        ),
      ),
    ),
    'acala' => 
    array (
      'id' => 787,
      'name' => 'Acala',
      'network' => 'acala',
      'nativeCurrency' => 
      array (
        'name' => 'Acala',
        'symbol' => 'ACA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth-rpc-acala.aca-api.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://eth-rpc-acala.aca-api.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Acala Blockscout',
          'url' => 'https://blockscout.acala.network',
          'apiUrl' => 'https://blockscout.acala.network/api',
        ),
      ),
      'testnet' => false,
    ),
    'alienx' => 
    array (
      'id' => 10241024,
      'name' => 'AlienX Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.alienxchain.io/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'AlienX Explorer',
          'url' => 'https://explorer.alienxchain.io',
        ),
      ),
      'testnet' => false,
    ),
    'alienxHalTestnet' => 
    array (
      'id' => 10241025,
      'name' => 'ALIENX Hal Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://hal-rpc.alienxchain.io/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'AlienX Explorer',
          'url' => 'https://hal-explorer.alienxchain.io',
        ),
      ),
      'testnet' => true,
    ),
    'ancient8' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xB09DC08428C8b4EFB4ff9C0827386CDF34277996',
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x639F2AECE398Aa76b07e59eF6abe2cFe32bacb68',
            'blockCreated' => 19070571,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0xd5e3eDf5b68135D559D572E26bF863FBC1950033',
            'blockCreated' => 19070571,
          ),
        ),
      ),
      'id' => 888888888,
      'name' => 'Ancient8',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ancient8.gg',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ancient8 explorer',
          'url' => 'https://scan.ancient8.gg',
          'apiUrl' => 'https://scan.ancient8.gg/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'ancient8Sepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x942fD5017c0F60575930D8574Eaca13BEcD6e1bB',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xfa1d9E26A6aCD7b22115D27572c1221B9803c960',
            'blockCreated' => 4972908,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xF6Bc0146d3c74D48306e79Ae134A260E418C9335',
            'blockCreated' => 4972908,
          ),
        ),
      ),
      'id' => 28122024,
      'name' => 'Ancient8 Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcv2-testnet.ancient8.gg',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ancient8 Celestia Testnet explorer',
          'url' => 'https://scanv2-testnet.ancient8.gg',
          'apiUrl' => 'https://scanv2-testnet.ancient8.gg/api',
        ),
      ),
      'sourceId' => 11155111,
    ),
    'anvil' => 
    array (
      'id' => 31337,
      'name' => 'Anvil',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
          'webSocket' => 
          array (
            0 => 'ws://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    'apexTestnet' => 
    array (
      'id' => 3993,
      'name' => 'APEX Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.apexlayer.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp-testnet.apexlayer.xyz',
          'apiUrl' => 'https://exp-testnet.apexlayer.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xf7642be33a6b18D16a995657adb5a68CD0438aE2',
          'blockCreated' => 283775,
        ),
      ),
      'testnet' => true,
    ),
    'arbitrum' => 
    array (
      'id' => 42161,
      'name' => 'Arbitrum One',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://arb1.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://arbiscan.io',
          'apiUrl' => 'https://api.arbiscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 7654707,
        ),
      ),
    ),
    'arbitrumGoerli' => 
    array (
      'id' => 421613,
      'name' => 'Arbitrum Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Arbitrum Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli-rollup.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://goerli.arbiscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 88114,
        ),
      ),
      'testnet' => true,
    ),
    'arbitrumNova' => 
    array (
      'id' => 42170,
      'name' => 'Arbitrum Nova',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://nova.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://nova.arbiscan.io',
          'apiUrl' => 'https://api-nova.arbiscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1746963,
        ),
      ),
    ),
    'assetChain' => 
    array (
      'id' => 42420,
      'name' => 'AssetChain Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Real World Asset',
        'symbol' => 'RWA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.assetchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Asset Chain Explorer',
          'url' => 'https://scan.assetchain.org',
          'apiUrl' => 'https://scan.assetchain.org/api',
        ),
      ),
      'testnet' => false,
      'contracts' => 
      array (
      ),
    ),
    'assetChainTestnet' => 
    array (
      'id' => 42421,
      'name' => 'AssetChain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Real World Asset',
        'symbol' => 'RWA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://enugu-rpc.assetchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Asset Chain Testnet Explorer',
          'url' => 'https://scan-testnet.assetchain.org',
          'apiUrl' => 'https://scan-testnet.assetchain.org/api',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x989F832D35988cb5e3eB001Fa2Fe789469EC31Ea',
          'blockCreated' => 17177,
        ),
      ),
    ),
    'astar' => 
    array (
      'id' => 592,
      'name' => 'Astar',
      'network' => 'astar-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Astar',
        'symbol' => 'ASTR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://astar.api.onfinality.io/public',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Astar Subscan',
          'url' => 'https://astar.subscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 761794,
        ),
      ),
      'testnet' => false,
    ),
    'astarZkEVM' => 
    array (
      'id' => 3776,
      'name' => 'Astar zkEVM',
      'network' => 'AstarZkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-zkevm.astar.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Astar zkEVM Explorer',
          'url' => 'https://astar-zkevm.explorer.startale.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 93528,
        ),
      ),
      'testnet' => false,
    ),
    'astarZkyoto' => 
    array (
      'id' => 6038361,
      'name' => 'Astar zkEVM Testnet zKyoto',
      'network' => 'zKyoto',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.startale.com/zkyoto',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zKyoto Explorer',
          'url' => 'https://zkyoto.explorer.startale.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 196153,
        ),
      ),
      'testnet' => true,
    ),
    'arbitrumSepolia' => 
    array (
      'id' => 421614,
      'name' => 'Arbitrum Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Arbitrum Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rollup.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://sepolia.arbiscan.io',
          'apiUrl' => 'https://api-sepolia.arbiscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 81930,
        ),
      ),
      'testnet' => true,
    ),
    'areonNetwork' => 
    array (
      'id' => 463,
      'name' => 'Areon Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'AREA',
        'symbol' => 'AREA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.areon.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet-ws.areon.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Areonscan',
          'url' => 'https://areonscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 353286,
        ),
      ),
      'testnet' => false,
    ),
    'areonNetworkTestnet' => 
    array (
      'id' => 462,
      'name' => 'Areon Network Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'TAREA',
        'symbol' => 'TAREA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.areon.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-ws.areon.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Areonscan',
          'url' => 'https://areonscan.com',
        ),
      ),
      'testnet' => true,
    ),
    'artelaTestnet' => 
    array (
      'id' => 11822,
      'name' => 'Artela Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'ART',
        'symbol' => 'ART',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://betanet-rpc1.artela.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Artela',
          'url' => 'https://betanet-scan.artela.network',
          'apiUrl' => 'https://betanet-scan.artela.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xd07c8635f76e8745Ee7092fbb6e8fbc5FeF09DD7',
          'blockCreated' => 7001871,
        ),
      ),
      'testnet' => true,
    ),
    'atletaOlympia' => 
    array (
      'id' => 2340,
      'name' => 'Atleta Olympia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Atla',
        'symbol' => 'ATLA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.atleta.network:9944',
            1 => 'https://testnet-rpc.atleta.network',
          ),
          'ws' => 
          array (
            0 => 'wss://testnet-rpc.atleta.network:9944',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Atleta Olympia Explorer',
          'url' => 'https://blockscout.atleta.network',
          'apiUrl' => 'https://blockscout.atleta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x1472ec6392180fb84F345d2455bCC75B26577115',
          'blockCreated' => 1076473,
        ),
      ),
      'testnet' => true,
    ),
    'aurora' => 
    array (
      'id' => 1313161554,
      'name' => 'Aurora',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.aurora.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Aurorascan',
          'url' => 'https://aurorascan.dev',
          'apiUrl' => 'https://aurorascan.dev/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 62907816,
        ),
      ),
    ),
    'auroraTestnet' => 
    array (
      'id' => 1313161555,
      'name' => 'Aurora Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.aurora.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Aurorascan',
          'url' => 'https://testnet.aurorascan.dev',
          'apiUrl' => 'https://testnet.aurorascan.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    'auroria' => 
    array (
      'id' => 205205,
      'name' => 'Auroria Testnet',
      'network' => 'auroria',
      'nativeCurrency' => 
      array (
        'name' => 'Auroria Stratis',
        'symbol' => 'tSTRAX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://auroria.rpc.stratisevm.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Auroria Testnet Explorer',
          'url' => 'https://auroria.explorer.stratisevm.com',
        ),
      ),
      'testnet' => true,
    ),
    'avalanche' => 
    array (
      'id' => 43114,
      'name' => 'Avalanche',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Avalanche',
        'symbol' => 'AVAX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.avax.network/ext/bc/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SnowTrace',
          'url' => 'https://snowtrace.io',
          'apiUrl' => 'https://api.snowtrace.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 11907934,
        ),
      ),
    ),
    'avalancheFuji' => 
    array (
      'id' => 43113,
      'name' => 'Avalanche Fuji',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Avalanche Fuji',
        'symbol' => 'AVAX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.avax-test.network/ext/bc/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SnowTrace',
          'url' => 'https://testnet.snowtrace.io',
          'apiUrl' => 'https://api-testnet.snowtrace.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 7096959,
        ),
      ),
      'testnet' => true,
    ),
    'b3Sepolia' => 
    array (
      'id' => 1993,
      'name' => 'B3 Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.b3.fun/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://sepolia.explorer.b3.fun',
        ),
      ),
      'testnet' => true,
      'sourceId' => 168587773,
    ),
    'b3' => 
    array (
      'id' => 8333,
      'name' => 'B3',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.b3.fun/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.b3.fun',
        ),
      ),
      'sourceId' => 8453,
    ),
    'bahamut' => 
    array (
      'id' => 5165,
      'network' => 'bahamut',
      'name' => 'Bahamut',
      'nativeCurrency' => 
      array (
        'name' => 'Fasttoken',
        'symbol' => 'FTN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc1.bahamut.io',
            1 => 'https://bahamut-rpc.publicnode.com',
            2 => 'https://rpc2.bahamut.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws1.sahara.bahamutchain.com',
            1 => 'wss://bahamut-rpc.publicnode.com',
            2 => 'wss://ws2.sahara.bahamutchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ftnscan',
          'url' => 'https://www.ftnscan.com',
          'apiUrl' => 'https://www.ftnscan.com/api',
        ),
      ),
    ),
    'base' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x56315b90c40730925ec5485cf004d835058518A0',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 5022,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x49048044D57e1C92A77f79988d21Fa8fAF74E97e',
            'blockCreated' => 17482143,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x3154Cf16ccdb4C6d922629664174b904d80F2C35',
            'blockCreated' => 17482143,
          ),
        ),
      ),
      'id' => 8453,
      'name' => 'Base',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.base.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Basescan',
          'url' => 'https://basescan.org',
          'apiUrl' => 'https://api.basescan.org/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'baseGoerli' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          5 => 
          array (
            'address' => '0x2A35891ff30313CcFa6CE88dcf3858bb075A2298',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1376988,
        ),
        'portal' => 
        array (
          5 => 
          array (
            'address' => '0xe93c8cD0D409341205A592f8c4Ac1A5fe5585cfA',
          ),
        ),
        'l1StandardBridge' => 
        array (
          5 => 
          array (
            'address' => '0xfA6D8Ee5BE770F84FC001D098C4bD604Fe01284a',
          ),
        ),
      ),
      'id' => 84531,
      'name' => 'Base Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli.base.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Basescan',
          'url' => 'https://goerli.basescan.org',
          'apiUrl' => 'https://goerli.basescan.org/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 5,
    ),
    'baseSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0xd6E6dBf4F7EA0ac412fD8b65ED297e64BB7a06E1',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x84457ca9D0163FbC4bbfe4Dfbb20ba46e48DF254',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x49f53e41452c74589e85ca1677426ba426459e85',
            'blockCreated' => 4446677,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xfd0Bf71F60660E2f608ed56e1659C450eB113120',
            'blockCreated' => 4446677,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1059647,
        ),
      ),
      'id' => 84532,
      'network' => 'base-sepolia',
      'name' => 'Base Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.base.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Basescan',
          'url' => 'https://sepolia.basescan.org',
          'apiUrl' => 'https://api-sepolia.basescan.org/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'beam' => 
    array (
      'id' => 4337,
      'name' => 'Beam',
      'network' => 'beam',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Beam',
        'symbol' => 'BEAM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://build.onbeam.com/rpc',
          ),
          'webSocket' => 
          array (
            0 => 'wss://build.onbeam.com/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Beam Explorer',
          'url' => 'https://subnets.avax.network/beam',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x4956f15efdc3dc16645e90cc356eafa65ffc65ec',
          'blockCreated' => 1,
        ),
      ),
    ),
    'beamTestnet' => 
    array (
      'id' => 13337,
      'name' => 'Beam Testnet',
      'network' => 'beam',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Beam',
        'symbol' => 'BEAM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://build.onbeam.com/rpc/testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://build.onbeam.com/ws/testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Beam Explorer',
          'url' => 'https://subnets-test.avax.network/beam',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x9bf49b704ee2a095b95c1f2d4eb9010510c41c9e',
          'blockCreated' => 3,
        ),
      ),
      'testnet' => true,
    ),
    'bearNetworkChainMainnet' => 
    array (
      'id' => 641230,
      'name' => 'Bear Network Chain Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BearNetworkChain',
        'symbol' => 'BRNKC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://brnkc-mainnet.bearnetwork.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BrnkScan',
          'url' => 'https://brnkscan.bearnetwork.net',
          'apiUrl' => 'https://brnkscan.bearnetwork.net/api',
        ),
      ),
    ),
    'bearNetworkChainTestnet' => 
    array (
      'id' => 751230,
      'name' => 'Bear Network Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'tBRNKC',
        'symbol' => 'tBRNKC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://brnkc-test.bearnetwork.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BrnkTestScan',
          'url' => 'https://brnktest-scan.bearnetwork.net',
          'apiUrl' => 'https://brnktest-scan.bearnetwork.net/api',
        ),
      ),
      'testnet' => true,
    ),
    'berachainTestnet' => 
    array (
      'id' => 80085,
      'name' => 'Berachain Artio',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BERA Token',
        'symbol' => 'BERA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://artio.rpc.berachain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Berachain',
          'url' => 'https://artio.beratrail.io',
        ),
      ),
      'testnet' => true,
    ),
    'berachainTestnetbArtio' => 
    array (
      'id' => 80084,
      'name' => 'Berachain bArtio',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BERA Token',
        'symbol' => 'BERA',
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 109269,
        ),
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://bartio.rpc.berachain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Berachain bArtio Beratrail',
          'url' => 'https://bartio.beratrail.io',
        ),
      ),
      'testnet' => true,
    ),
    'bevmMainnet' => 
    array (
      'id' => 11501,
      'name' => 'BEVM Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet-1.bevm.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bevmscan',
          'url' => 'https://scan-mainnet.bevm.io',
          'apiUrl' => 'https://scan-mainnet-api.bevm.io/api',
        ),
      ),
    ),
    'bitkub' => 
    array (
      'id' => 96,
      'name' => 'Bitkub',
      'nativeCurrency' => 
      array (
        'name' => 'Bitkub',
        'symbol' => 'KUB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bitkubchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitkub Chain Mainnet Explorer',
          'url' => 'https://www.bkcscan.com',
          'apiUrl' => 'https://www.bkcscan.com/api',
        ),
      ),
    ),
    'bitkubTestnet' => 
    array (
      'id' => 25925,
      'name' => 'Bitkub Testnet',
      'network' => 'Bitkub Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitkub Test',
        'symbol' => 'tKUB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.bitkubchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitkub Chain Testnet Explorer',
          'url' => 'https://testnet.bkcscan.com',
          'apiUrl' => 'https://testnet.bkcscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    'bitlayer' => 
    array (
      'id' => 200901,
      'name' => 'Bitlayer Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bitlayer.org',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.bitlayer.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'bitlayer mainnet scan',
          'url' => 'https://www.btrscan.com',
        ),
      ),
    ),
    'bitlayerTestnet' => 
    array (
      'id' => 200810,
      'name' => 'Bitlayer Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.bitlayer.org',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-ws.bitlayer.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'bitlayer testnet scan',
          'url' => 'https://testnet.btrscan.com',
        ),
      ),
      'testnet' => true,
    ),
    'bitTorrent' => 
    array (
      'id' => 199,
      'name' => 'BitTorrent',
      'network' => 'bittorrent-chain-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BitTorrent',
        'symbol' => 'BTT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bittorrentchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bttcscan',
          'url' => 'https://bttcscan.com',
          'apiUrl' => 'https://api.bttcscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 31078552,
        ),
      ),
    ),
    'bitTorrentTestnet' => 
    array (
      'id' => 1028,
      'name' => 'BitTorrent Chain Testnet',
      'network' => 'bittorrent-chain-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BitTorrent',
        'symbol' => 'BTT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testrpc.bittorrentchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bttcscan',
          'url' => 'https://testnet.bttcscan.com',
          'apiUrl' => 'https://testnet.bttcscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    'blast' => 
    array (
      'id' => 81457,
      'name' => 'Blast',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.blast.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blastscan',
          'url' => 'https://blastscan.io',
          'apiUrl' => 'https://api.blastscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 212929,
        ),
      ),
      'sourceId' => 1,
    ),
    'blastSepolia' => 
    array (
      'id' => 168587773,
      'name' => 'Blast Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.blast.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blastscan',
          'url' => 'https://sepolia.blastscan.io',
          'apiUrl' => 'https://api-sepolia.blastscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 756690,
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'bob' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 23131,
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xdDa53E23f8a32640b04D7256e651C1db98dB11C1',
            'blockCreated' => 4462615,
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x8AdeE124447435fE03e3CD24dF3f4cAE32E65a3E',
            'blockCreated' => 4462615,
          ),
        ),
      ),
      'id' => 60808,
      'name' => 'BOB',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gobob.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.gobob.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOB Explorer',
          'url' => 'https://explorer.gobob.xyz',
        ),
      ),
      'sourceId' => 1,
    ),
    'bobSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 35677,
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x14D0069452b4AE2b250B395b8adAb771E4267d2f',
            'blockCreated' => 4462615,
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x867B1Aa872b9C8cB5E9F7755feDC45BB24Ad0ae4',
            'blockCreated' => 4462615,
          ),
        ),
      ),
      'id' => 808813,
      'name' => 'BOB Sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://bob-sepolia.rpc.gobob.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://bob-sepolia.rpc.gobob.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOB Sepolia Explorer',
          'url' => 'https://bob-sepolia.explorer.gobob.xyz',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'boba' => 
    array (
      'id' => 288,
      'name' => 'Boba Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.boba.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOBAScan',
          'url' => 'https://bobascan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 446859,
        ),
      ),
    ),
    'bobaSepolia' => 
    array (
      'id' => 28882,
      'name' => 'Boba Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.boba.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOBAScan',
          'url' => 'https://testnet.bobascan.com',
        ),
      ),
      'testnet' => true,
    ),
    'botanixTestnet' => 
    array (
      'id' => 3636,
      'name' => 'Botanix Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Botanix',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://poa-node.botanixlabs.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://blockscout.botanixlabs.dev',
          'apiUrl' => 'https://blockscout.botanixlabs.dev',
        ),
      ),
      'testnet' => true,
    ),
    'bounceBit' => 
    array (
      'id' => 6001,
      'name' => 'BounceBit Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BounceBit',
        'symbol' => 'BB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://fullnode-mainnet.bouncebitapi.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BB Scan',
          'url' => 'https://bbscan.io',
        ),
      ),
      'testnet' => false,
    ),
    'bounceBitTestnet' => 
    array (
      'id' => 6000,
      'name' => 'BounceBit Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BounceBit',
        'symbol' => 'BB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://fullnode-testnet.bouncebitapi.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BB Scan',
          'url' => 'https://testnet.bbscan.io',
        ),
      ),
      'testnet' => true,
    ),
    'bronos' => 
    array (
      'id' => 1039,
      'name' => 'Bronos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BRO',
        'symbol' => 'BRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.bronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BronoScan',
          'url' => 'https://broscan.bronos.org',
        ),
      ),
    ),
    'bronosTestnet' => 
    array (
      'id' => 1038,
      'name' => 'Bronos Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Bronos Coin',
        'symbol' => 'tBRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-testnet.bronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BronoScan',
          'url' => 'https://tbroscan.bronos.org',
        ),
      ),
      'testnet' => true,
    ),
    'bsc' => 
    array (
      'id' => 56,
      'name' => 'BNB Smart Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BNB',
        'symbol' => 'BNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/bsc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BscScan',
          'url' => 'https://bscscan.com',
          'apiUrl' => 'https://api.bscscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 15921452,
        ),
      ),
    ),
    'bscTestnet' => 
    array (
      'id' => 97,
      'name' => 'Binance Smart Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BNB',
        'symbol' => 'tBNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://data-seed-prebsc-1-s1.bnbchain.org:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BscScan',
          'url' => 'https://testnet.bscscan.com',
          'apiUrl' => 'https://api-testnet.bscscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 17422483,
        ),
      ),
      'testnet' => true,
    ),
    'bscGreenfield' => 
    array (
      'id' => 1017,
      'name' => 'BNB Greenfield Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BNB',
        'symbol' => 'BNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://greenfield-chain.bnbchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BNB Greenfield Mainnet Scan',
          'url' => 'https://greenfieldscan.com',
        ),
      ),
      'testnet' => false,
    ),
    'bsquared' => 
    array (
      'id' => 223,
      'name' => 'B2',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bsquared.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.bsquared.network',
        ),
      ),
    ),
    'bsquaredTestnet' => 
    array (
      'id' => 1123,
      'name' => 'B2 Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.bsquared.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://testnet-explorer.bsquared.network',
        ),
      ),
      'testnet' => true,
    ),
    'btr' => 
    array (
      'id' => 200901,
      'name' => 'Bitlayer',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bitlayer.org',
            1 => 'https://rpc.bitlayer-rpc.com',
            2 => 'https://rpc.ankr.com/bitlayer',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.bitlayer.org',
            1 => 'wss://ws.bitlayer-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitlayer(BTR) Scan',
          'url' => 'https://www.btrscan.com',
        ),
      ),
    ),
    'btrTestnet' => 
    array (
      'id' => 200810,
      'name' => 'Bitlayer Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.bitlayer.org',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-ws.bitlayer.org',
            1 => 'wss://testnet-ws.bitlayer-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitlayer(BTR) Scan',
          'url' => 'https://testnet.btrscan.com',
        ),
      ),
      'testnet' => true,
    ),
    'bxn' => 
    array (
      'id' => 4999,
      'name' => 'BlackFort Exchange Network',
      'nativeCurrency' => 
      array (
        'name' => 'BlackFort Token',
        'symbol' => 'BXN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.blackfort.network/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.blackfort.network',
          'apiUrl' => 'https://explorer.blackfort.network/api',
        ),
      ),
    ),
    'bxnTestnet' => 
    array (
      'id' => 4777,
      'name' => 'BlackFort Exchange Network Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BlackFort Testnet Token',
        'symbol' => 'TBXN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.blackfort.network/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet-explorer.blackfort.network',
          'apiUrl' => 'https://testnet-explorer.blackfort.network/api',
        ),
      ),
      'testnet' => true,
    ),
    'cannon' => 
    array (
      'id' => 13370,
      'name' => 'Cannon',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    'canto' => 
    array (
      'id' => 7700,
      'name' => 'Canto',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Canto',
        'symbol' => 'CANTO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://canto.gravitychain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Tuber.Build (Blockscout)',
          'url' => 'https://tuber.build',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 2905789,
        ),
      ),
    ),
    'celo' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionRequest' => 
        array (
          'type' => 'transactionRequest',
        ),
      ),
      'fees' => 
      array (
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 13112599,
        ),
      ),
      'id' => 42220,
      'name' => 'Celo',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CELO',
        'symbol' => 'CELO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://forno.celo.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Celo Explorer',
          'url' => 'https://celoscan.io',
          'apiUrl' => 'https://api.celoscan.io/api',
        ),
      ),
      'testnet' => false,
    ),
    'celoAlfajores' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionRequest' => 
        array (
          'type' => 'transactionRequest',
        ),
      ),
      'fees' => 
      array (
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 14569001,
        ),
        'portal' => 
        array (
          17000 => 
          array (
            'address' => '0x82527353927d8D069b3B452904c942dA149BA381',
            'blockCreated' => 2411324,
          ),
        ),
        'disputeGameFactory' => 
        array (
          17000 => 
          array (
            'address' => '0xE28AAdcd9883746c0e5068F58f9ea06027b214cb',
            'blockCreated' => 2411324,
          ),
        ),
        'l2OutputOracle' => 
        array (
          17000 => 
          array (
            'address' => '0x4a2635e9e4f6e45817b1D402ac4904c1d1752438',
            'blockCreated' => 2411324,
          ),
        ),
        'l1StandardBridge' => 
        array (
          17000 => 
          array (
            'address' => '0xD1B0E0581973c9eB7f886967A606b9441A897037',
            'blockCreated' => 2411324,
          ),
        ),
      ),
      'id' => 44787,
      'name' => 'Alfajores',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CELO',
        'symbol' => 'A-CELO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://alfajores-forno.celo-testnet.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Celo Alfajores Explorer',
          'url' => 'https://celo-alfajores.blockscout.com',
          'apiUrl' => 'https://celo-alfajores.blockscout.com/api',
        ),
      ),
      'testnet' => true,
    ),
    'chiliz' => 
    array (
      'id' => 88888,
      'name' => 'Chiliz Chain',
      'network' => 'chiliz-chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CHZ',
        'symbol' => 'CHZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/chiliz',
            1 => 'https://chiliz-rpc.publicnode.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chiliz Explorer',
          'url' => 'https://scan.chiliz.com',
          'apiUrl' => 'https://scan.chiliz.com/api',
        ),
      ),
    ),
    'chips' => 
    array (
      'id' => 2882,
      'name' => 'Chips Network',
      'network' => 'CHIPS',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IOTA',
        'symbol' => 'IOTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://node.chips.ooo/wasp/api/v1/chains/iota1pp3d3mnap3ufmgqnjsnw344sqmf5svjh26y2khnmc89sv6788y3r207a8fn/evm',
          ),
        ),
      ),
    ),
    'classic' => 
    array (
      'id' => 61,
      'name' => 'Ethereum Classic',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETC',
        'symbol' => 'ETC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://etc.rivet.link',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.com/etc/mainnet',
        ),
      ),
    ),
    'confluxESpace' => 
    array (
      'id' => 1030,
      'name' => 'Conflux eSpace',
      'nativeCurrency' => 
      array (
        'name' => 'Conflux',
        'symbol' => 'CFX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.confluxrpc.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evm.confluxrpc.com/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ConfluxScan',
          'url' => 'https://evm.confluxscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xEFf0078910f638cd81996cc117bccD3eDf2B072F',
          'blockCreated' => 68602935,
        ),
      ),
    ),
    'confluxESpaceTestnet' => 
    array (
      'id' => 71,
      'name' => 'Conflux eSpace Testnet',
      'network' => 'cfx-espace-testnet',
      'testnet' => true,
      'nativeCurrency' => 
      array (
        'name' => 'Conflux',
        'symbol' => 'CFX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evmtestnet.confluxrpc.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evmtestnet.confluxrpc.com/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ConfluxScan',
          'url' => 'https://evmtestnet.confluxscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xEFf0078910f638cd81996cc117bccD3eDf2B072F',
          'blockCreated' => 117499050,
        ),
      ),
    ),
    'coreDao' => 
    array (
      'id' => 1116,
      'name' => 'Core Dao',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Core',
        'symbol' => 'CORE',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.coredao.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'CoreDao',
          'url' => 'https://scan.coredao.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 11907934,
        ),
      ),
      'testnet' => false,
    ),
    'crab' => 
    array (
      'id' => 44,
      'name' => 'Crab Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Crab Network Native Token',
        'symbol' => 'CRAB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://crab-rpc.darwinia.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://crab-rpc.darwinia.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://crab-scan.darwinia.network',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 3032593,
        ),
      ),
    ),
    'cronos' => 
    array (
      'id' => 25,
      'name' => 'Cronos Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Cronos',
        'symbol' => 'CRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos Explorer',
          'url' => 'https://explorer.cronos.org',
          'apiUrl' => 'https://explorer-api.cronos.org/mainnet/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1963112,
        ),
      ),
    ),
    'cronoszkEVM' => 
    array (
      'id' => 388,
      'name' => 'Cronos zkEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Cronos zkEVM CRO',
        'symbol' => 'zkCRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.zkevm.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos zkEVM (Mainnet) Chain Explorer',
          'url' => 'https://explorer.zkevm.cronos.org',
        ),
      ),
    ),
    'cronoszkEVMTestnet' => 
    array (
      'id' => 282,
      'name' => 'Cronos zkEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Cronos zkEVM Test Coin',
        'symbol' => 'zkTCRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.zkevm.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos zkEVM Testnet Explorer',
          'url' => 'https://explorer.zkevm.cronos.org/testnet',
        ),
      ),
      'testnet' => true,
    ),
    'cronosTestnet' => 
    array (
      'id' => 338,
      'name' => 'Cronos Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CRO',
        'symbol' => 'tCRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-t3.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos Explorer',
          'url' => 'https://cronos.org/explorer/testnet3',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 10191251,
        ),
      ),
      'testnet' => true,
    ),
    'crossbell' => 
    array (
      'id' => 3737,
      'name' => 'Crossbell',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CSB',
        'symbol' => 'CSB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.crossbell.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'CrossScan',
          'url' => 'https://scan.crossbell.io',
          'apiUrl' => 'https://scan.crossbell.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 38246031,
        ),
      ),
    ),
    'curtis' => 
    array (
      'id' => 33111,
      'name' => 'Curtis',
      'nativeCurrency' => 
      array (
        'name' => 'ApeCoin',
        'symbol' => 'APE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.curtis.apechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Curtis Explorer',
          'url' => 'https://explorer.curtis.apechain.com',
        ),
      ),
      'testnet' => true,
    ),
    'cyber' => 
    array (
      'id' => 7560,
      'name' => 'Cyber',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://cyber.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://cyberscan.co',
          'apiUrl' => 'https://cyberscan.co/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 0,
        ),
      ),
    ),
    'cyberTestnet' => 
    array (
      'id' => 111557560,
      'name' => 'Cyber Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://cyber-testnet.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet.cyberscan.co',
          'apiUrl' => 'https://testnet.cyberscan.co/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xffc391F0018269d4758AEA1a144772E8FB99545E',
          'blockCreated' => 304545,
        ),
      ),
      'testnet' => true,
    ),
    'darwinia' => 
    array (
      'id' => 46,
      'name' => 'Darwinia Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'RING',
        'symbol' => 'RING',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.darwinia.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.darwinia.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.darwinia.network',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 69420,
        ),
      ),
    ),
    'dchain' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 2716446429837000,
      'name' => 'Dchain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dchain-2716446429837000-1.jsonrpc.sagarpc.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Dchain Explorer',
          'url' => 'https://dchain-2716446429837000-1.sagaexplorer.io',
          'apiUrl' => 'https://api-dchain-2716446429837000-1.sagaexplorer.io/api',
        ),
      ),
    ),
    'dchainTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 2713017997578000,
      'name' => 'Dchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dchaintestnet-2713017997578000-1.jsonrpc.testnet.sagarpc.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Dchain Explorer',
          'url' => 'https://dchaintestnet-2713017997578000-1.testnet.sagaexplorer.io',
          'apiUrl' => 'https://api-dchaintestnet-2713017997578000-1.testnet.sagaexplorer.io/api',
        ),
      ),
    ),
    'defichainEvm' => 
    array (
      'id' => 1130,
      'network' => 'defichain-evm',
      'name' => 'DeFiChain EVM Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'DeFiChain',
        'symbol' => 'DFI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.mainnet.ocean.jellyfishsdk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DeFiScan',
          'url' => 'https://meta.defiscan.live',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 137852,
        ),
      ),
    ),
    'defichainEvmTestnet' => 
    array (
      'id' => 1131,
      'network' => 'defichain-evm-testnet',
      'name' => 'DeFiChain EVM Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'DeFiChain',
        'symbol' => 'DFI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.testnet.ocean.jellyfishsdk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DeFiScan',
          'url' => 'https://meta.defiscan.live/?network=TestNet',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 156462,
        ),
      ),
      'testnet' => true,
    ),
    'degen' => 
    array (
      'id' => 666666666,
      'name' => 'Degen',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Degen',
        'symbol' => 'DEGEN',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.degen.tips',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.degen.tips',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Degen Chain Explorer',
          'url' => 'https://explorer.degen.tips',
          'apiUrl' => 'https://explorer.degen.tips/api/v2',
        ),
      ),
    ),
    'dfk' => 
    array (
      'id' => 53935,
      'name' => 'DFK Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Jewel',
        'symbol' => 'JEWEL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://subnets.avax.network/defi-kingdoms/dfk-chain/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DFKSubnetScan',
          'url' => 'https://subnets.avax.network/defi-kingdoms',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14790551,
        ),
      ),
    ),
    'dodochainTestnet' => 
    array (
      'id' => 53457,
      'name' => 'DODOchain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DODO',
        'symbol' => 'DODO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dodochain-testnet.alt.technology',
          ),
          'webSocket' => 
          array (
            0 => 'wss://dodochain-testnet.alt.technology/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DODOchain Testnet (Sepolia) Explorer',
          'url' => 'https://testnet-scan.dodochain.com',
        ),
      ),
      'testnet' => true,
    ),
    'dogechain' => 
    array (
      'id' => 2000,
      'name' => 'Dogechain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Wrapped Dogecoin',
        'symbol' => 'WDOGE',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.dogechain.dog',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DogeChainExplorer',
          'url' => 'https://explorer.dogechain.dog',
          'apiUrl' => 'https://explorer.dogechain.dog/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x68a8609a60a008EFA633dfdec592c03B030cC508',
          'blockCreated' => 25384031,
        ),
      ),
    ),
    'dosChain' => 
    array (
      'id' => 7979,
      'name' => 'DOS Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DOS Chain',
        'symbol' => 'DOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://main.doschain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DOS Chain Explorer',
          'url' => 'https://doscan.io',
          'apiUrl' => 'https://api.doscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 161908,
        ),
      ),
    ),
    'dosChainTestnet' => 
    array (
      'id' => 3939,
      'name' => 'DOS Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DOS Chain Testnet',
        'symbol' => 'DOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://test.doschain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DOS Chain Testnet Explorer',
          'url' => 'https://test.doscan.io',
          'apiUrl' => 'https://api-test.doscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 69623,
        ),
      ),
      'testnet' => true,
    ),
    'dreyerxMainnet' => 
    array (
      'id' => 23451,
      'name' => 'DreyerX Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'DreyerX',
        'symbol' => 'DRX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.dreyerx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DreyerX Scan',
          'url' => 'https://scan.dreyerx.com',
        ),
      ),
    ),
    'dreyerxTestnet' => 
    array (
      'id' => 23452,
      'name' => 'DreyerX Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'DreyerX',
        'symbol' => 'DRX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://testnet-rpc.dreyerx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DreyerX Testnet Scan',
          'url' => 'https://testnet-scan.dreyerx.com',
        ),
      ),
      'testnet' => true,
    ),
    'edgeless' => 
    array (
      'id' => 2026,
      'name' => 'Edgeless Network',
      'nativeCurrency' => 
      array (
        'name' => 'Edgeless Wrapped ETH',
        'symbol' => 'EwETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.edgeless.network/http',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.edgeless.network/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgeless Explorer',
          'url' => 'https://explorer.edgeless.network',
        ),
      ),
    ),
    'edgelessTestnet' => 
    array (
      'id' => 202,
      'name' => 'Edgeless Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Edgeless Wrapped ETH',
        'symbol' => 'EwETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://edgeless-testnet.rpc.caldera.xyz/http',
          ),
          'webSocket' => 
          array (
            0 => 'wss://edgeless-testnet.rpc.caldera.xyz/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgeless Testnet Explorer',
          'url' => 'https://testnet.explorer.edgeless.network',
        ),
      ),
    ),
    'edgeware' => 
    array (
      'id' => 2021,
      'name' => 'Edgeware EdgeEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Edgeware',
        'symbol' => 'EDG',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://edgeware-evm.jelliedowl.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgscan by Bharathcoorg',
          'url' => 'https://edgscan.live',
          'apiUrl' => 'https://edgscan.live/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 18117872,
        ),
      ),
    ),
    'edgewareTestnet' => 
    array (
      'id' => 2022,
      'name' => 'Beresheet BereEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Testnet EDG',
        'symbol' => 'tEDG',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://beresheet-evm.jelliedowl.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgscan by Bharathcoorg',
          'url' => 'https://testnet.edgscan.live',
          'apiUrl' => 'https://testnet.edgscan.live/api',
        ),
      ),
    ),
    'elysiumTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 1338,
      'name' => 'Elysium Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'LAVA',
        'symbol' => 'LAVA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://elysium-test-rpc.vulcanforged.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Elysium testnet explorer',
          'url' => 'https://elysium-explorer.vulcanforged.com',
        ),
      ),
      'testnet' => true,
    ),
    'eon' => 
    array (
      'id' => 7332,
      'name' => 'Horizen EON',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ZEN',
        'symbol' => 'ZEN',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eon-rpc.horizenlabs.io/ethv1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'EON Explorer',
          'url' => 'https://eon-explorer.horizenlabs.io',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'eos' => 
    array (
      'id' => 17777,
      'name' => 'EOS EVM',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EOS',
        'symbol' => 'EOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.evm.eosnetwork.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'EOS EVM Explorer',
          'url' => 'https://explorer.evm.eosnetwork.com',
          'apiUrl' => 'https://explorer.evm.eosnetwork.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 7943933,
        ),
      ),
    ),
    'eosTestnet' => 
    array (
      'id' => 15557,
      'name' => 'EOS EVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EOS',
        'symbol' => 'EOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.testnet.evm.eosnetwork.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'EOS EVM Testnet Explorer',
          'url' => 'https://explorer.testnet.evm.eosnetwork.com',
          'apiUrl' => 'https://explorer.testnet.evm.eosnetwork.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 9067940,
        ),
      ),
      'testnet' => true,
    ),
    'etherlink' => 
    array (
      'id' => 42793,
      'name' => 'Etherlink',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Tez',
        'symbol' => 'XTZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://node.mainnet.etherlink.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherlink',
          'url' => 'https://explorer.etherlink.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 33899,
        ),
      ),
    ),
    'etherlinkTestnet' => 
    array (
      'id' => 128123,
      'name' => 'Etherlink Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Tez',
        'symbol' => 'XTZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://node.ghostnet.etherlink.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherlink Testnet',
          'url' => 'https://testnet-explorer.etherlink.com',
        ),
      ),
      'testnet' => true,
    ),
    'evmos' => 
    array (
      'id' => 9001,
      'name' => 'Evmos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Evmos',
        'symbol' => 'EVMOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.bd.evmos.org:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Evmos Block Explorer',
          'url' => 'https://escan.live',
        ),
      ),
    ),
    'evmosTestnet' => 
    array (
      'id' => 9000,
      'name' => 'Evmos Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Evmos',
        'symbol' => 'EVMOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.bd.evmos.dev:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Evmos Testnet Block Explorer',
          'url' => 'https://evm.evmos.dev/',
        ),
      ),
    ),
    'ekta' => 
    array (
      'id' => 1994,
      'name' => 'Ekta',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EKTA',
        'symbol' => 'EKTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://main.ekta.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ektascan',
          'url' => 'https://ektascan.io',
          'apiUrl' => 'https://ektascan.io/api',
        ),
      ),
    ),
    'ektaTestnet' => 
    array (
      'id' => 1004,
      'name' => 'Ekta Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EKTA',
        'symbol' => 'EKTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://test.ekta.io:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Test Ektascan',
          'url' => 'https://test.ektascan.io',
          'apiUrl' => 'https://test.ektascan.io/api',
        ),
      ),
      'testnet' => true,
    ),
    'elastos' => 
    array (
      'id' => 20,
      'name' => 'Elastos Smart Chain',
      'nativeCurrency' => 
      array (
        'name' => 'ELA',
        'symbol' => 'ELA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api2.elastos.io/eth',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Elastos Explorer',
          'url' => 'https://esc.elastos.io',
        ),
      ),
      'testnet' => false,
    ),
    'elastosTestnet' => 
    array (
      'id' => 21,
      'name' => 'Elastos Smart Chain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'tELA',
        'symbol' => 'tELA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api-testnet.elastos.io/eth',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Elastos Explorer',
          'url' => 'https://esc-testnet.elastos.io',
        ),
      ),
      'testnet' => true,
    ),
    'electroneum' => 
    array (
      'id' => 52014,
      'name' => 'Electroneum Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'ETN',
        'symbol' => 'ETN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.electroneum.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Electroneum Block Explorer',
          'url' => 'https://blockexplorer.electroneum.com',
        ),
      ),
      'testnet' => false,
    ),
    'electroneumTestnet' => 
    array (
      'id' => 5201420,
      'name' => 'Electroneum Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'ETN',
        'symbol' => 'ETN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.electroneum.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Electroneum Block Explorer',
          'url' => 'https://blockexplorer.thesecurityteam.rocks',
        ),
      ),
      'testnet' => true,
    ),
    'fantom' => 
    array (
      'id' => 250,
      'name' => 'Fantom',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Fantom',
        'symbol' => 'FTM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/fantom',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FTMScan',
          'url' => 'https://ftmscan.com',
          'apiUrl' => 'https://api.ftmscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 33001987,
        ),
      ),
    ),
    'fantomSonicTestnet' => 
    array (
      'id' => 64240,
      'name' => 'Fantom Sonic Open Testnet',
      'network' => 'fantom-sonic-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Fantom',
        'symbol' => 'FTM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcapi.sonic.fantom.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Fantom Sonic Open Testnet Explorer',
          'url' => 'https://public-sonic.fantom.network',
        ),
      ),
      'testnet' => true,
    ),
    'fantomTestnet' => 
    array (
      'id' => 4002,
      'name' => 'Fantom Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Fantom',
        'symbol' => 'FTM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.fantom.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FTMScan',
          'url' => 'https://testnet.ftmscan.com',
          'apiUrl' => 'https://testnet.ftmscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 8328688,
        ),
      ),
      'testnet' => true,
    ),
    'fibo' => 
    array (
      'id' => 12306,
      'name' => 'Fibo Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'fibo',
        'symbol' => 'FIBO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://network.hzroc.art',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FiboScan',
          'url' => 'https://scan.fibochain.org',
        ),
      ),
    ),
    'filecoin' => 
    array (
      'id' => 314,
      'name' => 'Filecoin Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'filecoin',
        'symbol' => 'FIL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.node.glif.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Filfox',
          'url' => 'https://filfox.info/en',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3328594,
        ),
      ),
    ),
    'filecoinCalibration' => 
    array (
      'id' => 314159,
      'name' => 'Filecoin Calibration',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'testnet filecoin',
        'symbol' => 'tFIL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.calibration.node.glif.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Filscan',
          'url' => 'https://calibration.filscan.io',
        ),
      ),
      'testnet' => true,
    ),
    'filecoinHyperspace' => 
    array (
      'id' => 3141,
      'name' => 'Filecoin Hyperspace',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'testnet filecoin',
        'symbol' => 'tFIL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.hyperspace.node.glif.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Filfox',
          'url' => 'https://hyperspace.filfox.info/en',
        ),
      ),
      'testnet' => true,
    ),
    'flare' => 
    array (
      'id' => 14,
      'name' => 'Flare Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flare',
        'symbol' => 'FLR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://flare-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Flare Explorer',
          'url' => 'https://flare-explorer.flare.network',
          'apiUrl' => 'https://flare-explorer.flare.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3002461,
        ),
      ),
    ),
    'flareTestnet' => 
    array (
      'id' => 114,
      'name' => 'Flare Testnet Coston2',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Coston2 Flare',
        'symbol' => 'C2FLR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://coston2-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Coston2 Explorer',
          'url' => 'https://coston2-explorer.flare.network',
          'apiUrl' => 'https://coston2-explorer.flare.network/api',
        ),
      ),
      'testnet' => true,
    ),
    'flowPreviewnet' => 
    array (
      'id' => 646,
      'name' => 'FlowEVM Previewnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flow',
        'symbol' => 'FLOW',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://previewnet.evm.nodes.onflow.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Previewnet Explorer',
          'url' => 'https://previewnet.flowdiver.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 6205,
        ),
      ),
    ),
    'flowMainnet' => 
    array (
      'id' => 747,
      'name' => 'FlowEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flow',
        'symbol' => 'FLOW',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.evm.nodes.onflow.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mainnet Explorer',
          'url' => 'https://flowdiver.io',
        ),
      ),
    ),
    'flowTestnet' => 
    array (
      'id' => 545,
      'name' => 'FlowEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flow',
        'symbol' => 'FLOW',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.evm.nodes.onflow.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Flow Diver',
          'url' => 'https://testnet.flowdiver.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 137518,
        ),
      ),
    ),
    'fluence' => 
    array (
      'id' => 9999999,
      'name' => 'Fluence',
      'nativeCurrency' => 
      array (
        'name' => 'FLT',
        'symbol' => 'FLT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.fluence.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.mainnet.fluence.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.mainnet.fluence.dev',
          'apiUrl' => 'https://blockscout.mainnet.fluence.dev/api',
        ),
      ),
    ),
    'fluenceStage' => 
    array (
      'id' => 123420000220,
      'name' => 'Fluence Stage',
      'nativeCurrency' => 
      array (
        'name' => 'tFLT',
        'symbol' => 'tFLT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.stage.fluence.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.stage.fluence.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.stage.fluence.dev',
          'apiUrl' => 'https://blockscout.stage.fluence.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    'fluenceTestnet' => 
    array (
      'id' => 52164803,
      'name' => 'Fluence Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'tFLT',
        'symbol' => 'tFLT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.fluence.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.testnet.fluence.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.testnet.fluence.dev',
          'apiUrl' => 'https://blockscout.testnet.fluence.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    'forma' => 
    array (
      'id' => 984122,
      'name' => 'Forma',
      'network' => 'forma',
      'nativeCurrency' => 
      array (
        'symbol' => 'TIA',
        'name' => 'TIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.forma.art',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.forma.art',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Forma Explorer',
          'url' => 'https://explorer.forma.art',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xd53C6FFB123F7349A32980F87faeD8FfDc9ef079',
          'blockCreated' => 252705,
        ),
      ),
    ),
    'foundry' => 
    array (
      'id' => 31337,
      'name' => 'Foundry',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
          'webSocket' => 
          array (
            0 => 'ws://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    'fraxtal' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x66CC916Ed5C6C2FA97014f7D1cD141528Ae171e4',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x36cb65c1967A0Fb0EEE11569C51C2f2aA1Ca6f6D',
            'blockCreated' => 19135323,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x34C0bD5877A5Ee7099D0f5688D65F4bB9158BDE2',
            'blockCreated' => 19135323,
          ),
        ),
      ),
      'id' => 252,
      'name' => 'Fraxtal',
      'nativeCurrency' => 
      array (
        'name' => 'Frax Ether',
        'symbol' => 'frxETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.frax.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'fraxscan',
          'url' => 'https://fraxscan.com',
          'apiUrl' => 'https://api.fraxscan.com/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'fraxtalTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          17000 => 
          array (
            'address' => '0x715EA64DA13F4d0831ece4Ad3E8c1aa013167F32',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          17000 => 
          array (
            'address' => '0xB9c64BfA498d5b9a8398Ed6f46eb76d90dE5505d',
            'blockCreated' => 318416,
          ),
        ),
        'l1StandardBridge' => 
        array (
          17000 => 
          array (
            'address' => '0x0BaafC217162f64930909aD9f2B27125121d6332',
            'blockCreated' => 318416,
          ),
        ),
      ),
      'id' => 2522,
      'name' => 'Fraxtal Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Frax Ether',
        'symbol' => 'frxETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.frax.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'fraxscan testnet',
          'url' => 'https://holesky.fraxscan.com',
          'apiUrl' => 'https://api-holesky.fraxscan.com/api',
        ),
      ),
      'sourceId' => 17000,
    ),
    'funkiMainnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 33979,
      'name' => 'Funki',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet.funkichain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Funki Mainnet Explorer',
          'url' => 'https://funkiscan.io',
        ),
      ),
      'sourceId' => 1,
    ),
    'funkiSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1620204,
        ),
      ),
      'id' => 3397901,
      'network' => 'funkiSepolia',
      'name' => 'Funki Sepolia Sandbox',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://funki-testnet.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Funki Sepolia Sandbox Explorer',
          'url' => 'https://sepolia-sandbox.funkichain.com/',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'fuse' => 
    array (
      'id' => 122,
      'name' => 'Fuse',
      'nativeCurrency' => 
      array (
        'name' => 'Fuse',
        'symbol' => 'FUSE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.fuse.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Fuse Explorer',
          'url' => 'https://explorer.fuse.io',
          'apiUrl' => 'https://explorer.fuse.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 16146628,
        ),
      ),
    ),
    'fuseSparknet' => 
    array (
      'id' => 123,
      'name' => 'Fuse Sparknet',
      'nativeCurrency' => 
      array (
        'name' => 'Spark',
        'symbol' => 'SPARK',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.fusespark.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Sparkent Explorer',
          'url' => 'https://explorer.fusespark.io',
          'apiUrl' => 'https://explorer.fusespark.io/api',
        ),
      ),
    ),
    'fusion' => 
    array (
      'id' => 32659,
      'name' => 'Fusion Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Fusion',
        'symbol' => 'FSN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.fusionnetwork.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.fusionnetwork.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FSNscan',
          'url' => 'https://fsnscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 10441605,
        ),
      ),
      'testnet' => false,
    ),
    'fusionTestnet' => 
    array (
      'id' => 46688,
      'name' => 'Fusion Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Fusion',
        'symbol' => 'FSN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.fusionnetwork.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.fusionnetwork.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FSNscan',
          'url' => 'https://testnet.fsnscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 10428309,
        ),
      ),
      'testnet' => true,
    ),
    'iotex' => 
    array (
      'id' => 4689,
      'name' => 'IoTeX',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IoTeX',
        'symbol' => 'IOTX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://babel-api.mainnet.iotex.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://babel-api.mainnet.iotex.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'IoTeXScan',
          'url' => 'https://iotexscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 22163670,
        ),
      ),
    ),
    'iotexTestnet' => 
    array (
      'id' => 4690,
      'name' => 'IoTeX Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IoTeX',
        'symbol' => 'IOTX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://babel-api.testnet.iotex.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://babel-api.testnet.iotex.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'IoTeXScan',
          'url' => 'https://testnet.iotexscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xb5cecD6894c6f473Ec726A176f1512399A2e355d',
          'blockCreated' => 24347592,
        ),
      ),
      'testnet' => true,
    ),
    'jbc' => 
    array (
      'id' => 8899,
      'name' => 'JIBCHAIN L1',
      'network' => 'jbc',
      'nativeCurrency' => 
      array (
        'name' => 'JBC',
        'symbol' => 'JBC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-l1.jibchain.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp-l1.jibchain.net',
          'apiUrl' => 'https://exp-l1.jibchain.net/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xc0C8C486D1466C57Efe13C2bf000d4c56F47CBdC',
          'blockCreated' => 2299048,
        ),
      ),
      'testnet' => false,
    ),
    'jbcTestnet' => 
    array (
      'id' => 88991,
      'name' => 'Jibchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'tJBC',
        'symbol' => 'tJBC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.jibchain.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp.testnet.jibchain.net',
          'apiUrl' => 'https://exp.testnet.jibchain.net/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xa1a858ad9041B4741e620355a3F96B3c78e70ecE',
          'blockCreated' => 32848,
        ),
      ),
      'testnet' => true,
    ),
    'karura' => 
    array (
      'id' => 686,
      'name' => 'Karura',
      'network' => 'karura',
      'nativeCurrency' => 
      array (
        'name' => 'Karura',
        'symbol' => 'KAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth-rpc-karura.aca-api.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://eth-rpc-karura.aca-api.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Karura Blockscout',
          'url' => 'https://blockscout.karura.network',
          'apiUrl' => 'https://blockscout.karura.network/api',
        ),
      ),
      'testnet' => false,
    ),
    'garnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          17000 => 
          array (
            'address' => '0x57ee40586fbE286AfC75E67cb69511A6D9aF5909',
            'blockCreated' => 1274684,
          ),
        ),
        'l2OutputOracle' => 
        array (
          17000 => 
          array (
            'address' => '0xCb8E7AC561b8EF04F2a15865e9fbc0766FEF569B',
            'blockCreated' => 1274684,
          ),
        ),
        'l1StandardBridge' => 
        array (
          17000 => 
          array (
            'address' => '0x09bcDd311FE398F80a78BE37E489f5D440DB95DE',
            'blockCreated' => 1274684,
          ),
        ),
      ),
      'name' => 'Garnet Testnet',
      'testnet' => true,
      'id' => 17069,
      'sourceId' => 17000,
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.garnetchain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.garnetchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.garnetchain.com',
        ),
      ),
    ),
    'goChain' => 
    array (
      'id' => 60,
      'name' => 'GoChain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'GO',
        'symbol' => 'GO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gochain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'GoChain Explorer',
          'url' => 'https://explorer.gochain.io',
        ),
      ),
      'testnet' => false,
    ),
    'gobi' => 
    array (
      'id' => 1663,
      'name' => 'Horizen Gobi Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Test ZEN',
        'symbol' => 'tZEN',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://gobi-testnet.horizenlabs.io/ethv1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Gobi Explorer',
          'url' => 'https://gobi-explorer.horizen.io',
        ),
      ),
      'contracts' => 
      array (
      ),
      'testnet' => true,
    ),
    'goerli' => 
    array (
      'id' => 5,
      'name' => 'Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/eth_goerli',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli.etherscan.io',
          'apiUrl' => 'https://api-goerli.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xfc4AC75C46C914aF5892d6d3eFFcebD7917293F1',
          'blockCreated' => 10339206,
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 6507670,
        ),
      ),
      'testnet' => true,
    ),
    'gnosis' => 
    array (
      'id' => 100,
      'name' => 'Gnosis',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Gnosis',
        'symbol' => 'xDAI',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gnosischain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.gnosischain.com/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Gnosisscan',
          'url' => 'https://gnosisscan.io',
          'apiUrl' => 'https://api.gnosisscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 21022491,
        ),
      ),
    ),
    'gnosisChiado' => 
    array (
      'id' => 10200,
      'name' => 'Gnosis Chiado',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Gnosis',
        'symbol' => 'xDAI',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.chiadochain.net',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.chiadochain.net/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.chiadochain.net',
          'apiUrl' => 'https://blockscout.chiadochain.net/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 4967313,
        ),
      ),
      'testnet' => true,
    ),
    'gravity' => 
    array (
      'id' => 1625,
      'name' => 'Gravity Alpha Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'G',
        'symbol' => 'G',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gravity.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Gravity Explorer',
          'url' => 'https://explorer.gravity.xyz',
          'apiUrl' => 'https://explorer.gravity.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xf8ac4BEB2F75d2cFFb588c63251347fdD629B92c',
          'blockCreated' => 16851,
        ),
      ),
    ),
    'guruTestnet' => 
    array (
      'id' => 261,
      'name' => 'Guru Network Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'testGURU',
        'symbol' => 'tGURU',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gurunetwork.ai/archive/261',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Guruscan',
          'url' => 'https://scan.gurunetwork.ai',
        ),
      ),
      'testnet' => true,
    ),
    'ham' => 
    array (
      'id' => 5112,
      'name' => 'Ham',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ham',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ham.fun',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.ham.fun',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ham Chain Explorer',
          'url' => 'https://explorer.ham.fun',
          'apiUrl' => 'https://explorer.ham.fun/api/v2',
        ),
      ),
    ),
    'hardhat' => 
    array (
      'id' => 31337,
      'name' => 'Hardhat',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    'harmonyOne' => 
    array (
      'id' => 1666600000,
      'name' => 'Harmony One',
      'nativeCurrency' => 
      array (
        'name' => 'Harmony',
        'symbol' => 'ONE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/harmony',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Harmony Explorer',
          'url' => 'https://explorer.harmony.one',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 24185753,
        ),
      ),
    ),
    'hashkeyTestnet' => 
    array (
      'id' => 133,
      'name' => 'HashKey Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'HashKey EcoPoints',
        'symbol' => 'HSK',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://hashkeychain-testnet.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HashKey Chain Explorer',
          'url' => 'https://hashkeychain-testnet-explorer.alt.technology',
        ),
      ),
    ),
    'haqqMainnet' => 
    array (
      'id' => 11235,
      'name' => 'HAQQ Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Islamic Coin',
        'symbol' => 'ISLM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.eth.haqq.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HAQQ Explorer',
          'url' => 'https://explorer.haqq.network',
          'apiUrl' => 'https://explorer.haqq.network/api',
        ),
      ),
    ),
    'haqqTestedge2' => 
    array (
      'id' => 54211,
      'name' => 'HAQQ Testedge 2',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Islamic Coin',
        'symbol' => 'ISLMT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.eth.testedge2.haqq.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HAQQ Explorer',
          'url' => 'https://explorer.testedge2.haqq.network',
          'apiUrl' => 'https://explorer.testedge2.haqq.network/api',
        ),
      ),
    ),
    'hedera' => 
    array (
      'id' => 295,
      'name' => 'Hedera Mainnet',
      'network' => 'hedera-mainnet',
      'nativeCurrency' => 
      array (
        'symbol' => 'HBAR',
        'name' => 'HBAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.hashio.io/api',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hashscan',
          'url' => 'https://hashscan.io/mainnet',
        ),
      ),
      'testnet' => false,
    ),
    'hederaTestnet' => 
    array (
      'id' => 296,
      'name' => 'Hedera Testnet',
      'network' => 'hedera-testnet',
      'nativeCurrency' => 
      array (
        'symbol' => 'HBAR',
        'name' => 'HBAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.hashio.io/api',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hashscan',
          'url' => 'https://hashscan.io/testnet',
        ),
      ),
      'testnet' => true,
    ),
    'hederaPreviewnet' => 
    array (
      'id' => 297,
      'name' => 'Hedera Previewnet',
      'network' => 'hedera-previewnet',
      'nativeCurrency' => 
      array (
        'symbol' => 'HBAR',
        'name' => 'HBAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://previewnet.hashio.io/api',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hashscan',
          'url' => 'https://hashscan.io/previewnet',
        ),
      ),
      'testnet' => true,
    ),
    'hemiSepolia' => 
    array (
      'id' => 743111,
      'name' => 'Hemi Sepolia',
      'network' => 'Hemi Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.rpc.hemi.network/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hemi Sepolia explorer',
          'url' => 'https://testnet.explorer.hemi.xyz',
        ),
      ),
      'testnet' => true,
    ),
    'holesky' => 
    array (
      'id' => 17000,
      'name' => 'Holesky',
      'nativeCurrency' => 
      array (
        'name' => 'Holesky Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://ethereum-holesky-rpc.publicnode.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://holesky.etherscan.io',
          'apiUrl' => 'https://api-holesky.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 77,
        ),
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
          'blockCreated' => 801613,
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xa6AC935D4971E3CD133b950aE053bECD16fE7f3b',
          'blockCreated' => 973484,
        ),
      ),
      'testnet' => true,
    ),
    'hychain' => 
    array (
      'id' => 2911,
      'name' => 'HYCHAIN',
      'nativeCurrency' => 
      array (
        'name' => 'HYTOPIA',
        'symbol' => 'TOPIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.hychain.com/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HYCHAIN Explorer',
          'url' => 'https://explorer.hychain.com',
        ),
      ),
      'testnet' => false,
    ),
    'hychainTestnet' => 
    array (
      'id' => 29112,
      'name' => 'HYCHAIN Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'HYTOPIA',
        'symbol' => 'TOPIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.hychain.com/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HYCHAIN Explorer',
          'url' => 'https://testnet-rpc.hychain.com/http',
        ),
      ),
      'testnet' => true,
    ),
    'immutableZkEvm' => 
    array (
      'id' => 13371,
      'name' => 'Immutable zkEVM',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Immutable Coin',
        'symbol' => 'IMX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.immutable.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Immutable Explorer',
          'url' => 'https://explorer.immutable.com',
          'apiUrl' => 'https://explorer.immutable.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x236bdA4589e44e6850f5aC6a74BfCa398a86c6c0',
          'blockCreated' => 4335972,
        ),
      ),
    ),
    'immutableZkEvmTestnet' => 
    array (
      'id' => 13473,
      'name' => 'Immutable zkEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Immutable Coin',
        'symbol' => 'IMX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.immutable.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Immutable Testnet Explorer',
          'url' => 'https://explorer.testnet.immutable.com/',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x2CC787Ed364600B0222361C4188308Fa8E68bA60',
          'blockCreated' => 5977391,
        ),
      ),
      'testnet' => true,
    ),
    'inEVM' => 
    array (
      'id' => 2525,
      'name' => 'inEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Injective',
        'symbol' => 'INJ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.rpc.inevm.com/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'inEVM Explorer',
          'url' => 'https://inevm.calderaexplorer.xyz',
          'apiUrl' => 'https://inevm.calderaexplorer.xyz/api/v2',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 118606,
        ),
      ),
    ),
    'iota' => 
    array (
      'id' => 8822,
      'name' => 'IOTA EVM',
      'network' => 'iotaevm',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IOTA',
        'symbol' => 'IOTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.iotaledger.net',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.json-rpc.evm.iotaledger.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.evm.iota.org',
          'apiUrl' => 'https://explorer.evm.iota.org/api',
        ),
      ),
    ),
    'iotaTestnet' => 
    array (
      'id' => 1075,
      'name' => 'IOTA EVM Testnet',
      'network' => 'iotaevm-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IOTA',
        'symbol' => 'IOTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.testnet.iotaledger.net',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.json-rpc.evm.testnet.iotaledger.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.evm.testnet.iotaledger.net',
          'apiUrl' => 'https://explorer.evm.testnet.iotaledger.net/api',
        ),
      ),
      'testnet' => true,
    ),
    'kakarotSepolia' => 
    array (
      'id' => 1802203764,
      'name' => 'Kakarot Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rpc.kakarot.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kakarot Scan',
          'url' => 'https://sepolia.kakarotscan.org',
        ),
      ),
      'testnet' => true,
    ),
    'kakarotStarknetSepolia' => 
    array (
      'id' => 5424235787602241,
      'name' => 'Kakarot Starknet Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rpc.kakarot.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kakarot Scan',
          'url' => 'https://sepolia.kakarotscan.org',
        ),
      ),
      'testnet' => true,
    ),
    'kava' => 
    array (
      'id' => 2222,
      'name' => 'Kava EVM',
      'network' => 'kava-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Kava',
        'symbol' => 'KAVA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.kava.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kava EVM Explorer',
          'url' => 'https://kavascan.com',
          'apiUrl' => 'https://kavascan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 3661165,
        ),
      ),
      'testnet' => false,
    ),
    'kavaTestnet' => 
    array (
      'id' => 2221,
      'name' => 'Kava EVM Testnet',
      'network' => 'kava-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Kava',
        'symbol' => 'KAVA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.testnet.kava.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kava EVM Testnet Explorer',
          'url' => 'https://testnet.kavascan.com/',
          'apiUrl' => 'https://testnet.kavascan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xDf1D724A7166261eEB015418fe8c7679BBEa7fd6',
          'blockCreated' => 7242179,
        ),
      ),
      'testnet' => true,
    ),
    'kcc' => 
    array (
      'id' => 321,
      'name' => 'KCC Mainnet',
      'network' => 'KCC Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'KCS',
        'symbol' => 'KCS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://kcc-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KCC Explorer',
          'url' => 'https://explorer.kcc.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 11760430,
        ),
      ),
      'testnet' => false,
    ),
    'kinto' => 
    array (
      'id' => 7887,
      'name' => 'Kinto Mainnet',
      'network' => 'Kinto Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.kinto.xyz/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kinto Explorer',
          'url' => 'https://explorer.kinto.xyz',
        ),
      ),
      'testnet' => false,
    ),
    'klaytn' => 
    array (
      'id' => 8217,
      'name' => 'Klaytn',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Klaytn',
        'symbol' => 'KLAY',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-en-cypress.klaytn.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KlaytnScope',
          'url' => 'https://scope.klaytn.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 96002415,
        ),
      ),
    ),
    'klaytnBaobab' => 
    array (
      'id' => 1001,
      'name' => 'Klaytn Baobab Testnet',
      'network' => 'klaytn-baobab',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Baobab Klaytn',
        'symbol' => 'KLAY',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-en-baobab.klaytn.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KlaytnScope',
          'url' => 'https://baobab.klaytnscope.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 123390593,
        ),
      ),
      'testnet' => true,
    ),
    'kaia' => 
    array (
      'id' => 8217,
      'name' => 'Kaia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Kaia',
        'symbol' => 'KAIA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-en.node.kaia.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KaiaScan',
          'url' => 'https://kaiascan.io',
          'apiUrl' => 'https://api-cypress.klaytnscope.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 96002415,
        ),
      ),
    ),
    'kairos' => 
    array (
      'id' => 1001,
      'name' => 'Kairos Testnet',
      'network' => 'kairos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Kairos KAIA',
        'symbol' => 'KAIA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-en-kairos.node.kaia.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KaiaScan',
          'url' => 'https://kairos.kaiascan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 123390593,
        ),
      ),
      'testnet' => true,
    ),
    'koi' => 
    array (
      'id' => 701,
      'name' => 'Koi Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Koi Network Native Token',
        'symbol' => 'KRING',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://koi-rpc.darwinia.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://koi-rpc.darwinia.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://koi-scan.darwinia.network',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 180001,
        ),
      ),
      'testnet' => true,
    ),
    'kroma' => 
    array (
      'id' => 255,
      'name' => 'Kroma',
      'nativeCurrency' => 
      array (
        'name' => 'ETH',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.kroma.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kroma Explorer',
          'url' => 'https://blockscout.kroma.network',
          'apiUrl' => 'https://blockscout.kroma.network/api',
        ),
      ),
      'testnet' => false,
    ),
    'kromaSepolia' => 
    array (
      'id' => 2358,
      'name' => 'Kroma Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.sepolia.kroma.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kroma Sepolia Explorer',
          'url' => 'https://blockscout.sepolia.kroma.network',
          'apiUrl' => 'https://blockscout.sepolia.kroma.network/api',
        ),
      ),
      'testnet' => true,
    ),
    'l3x' => 
    array (
      'id' => 12324,
      'name' => 'L3X Protocol',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet.l3x.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-mainnet.l3x.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'L3X Mainnet Explorer',
          'url' => 'https://explorer.l3x.com',
          'apiUrl' => 'https://explorer.l3x.com/api/v2',
        ),
      ),
      'testnet' => false,
    ),
    'l3xTestnet' => 
    array (
      'id' => 12325,
      'name' => 'L3X Protocol Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.l3x.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-testnet.l3x.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'L3X Testnet Explorer',
          'url' => 'https://explorer-testnet.l3x.com',
          'apiUrl' => 'https://explorer-testnet.l3x.com/api/v2',
        ),
      ),
      'testnet' => true,
    ),
    'lightlinkPegasus' => 
    array (
      'id' => 1891,
      'name' => 'LightLink Pegasus Testnet',
      'network' => 'lightlink-pegasus',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://replicator.pegasus.lightlink.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LightLink Pegasus Explorer',
          'url' => 'https://pegasus.lightlink.io',
        ),
      ),
      'testnet' => true,
    ),
    'lightlinkPhoenix' => 
    array (
      'id' => 1890,
      'name' => 'LightLink Phoenix Mainnet',
      'network' => 'lightlink-phoenix',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://replicator.phoenix.lightlink.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LightLink Phoenix Explorer',
          'url' => 'https://phoenix.lightlink.io',
        ),
      ),
      'testnet' => false,
    ),
    'linea' => 
    array (
      'fees' => 
      array (
      ),
      'id' => 59144,
      'name' => 'Linea Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://lineascan.build',
          'apiUrl' => 'https://api.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 42,
        ),
      ),
      'testnet' => false,
    ),
    'lineaGoerli' => 
    array (
      'id' => 59140,
      'name' => 'Linea Goerli Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.goerli.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.goerli.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli.lineascan.build',
          'apiUrl' => 'https://api-goerli.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 498623,
        ),
      ),
      'testnet' => true,
    ),
    'lineaSepolia' => 
    array (
      'fees' => 
      array (
      ),
      'id' => 59141,
      'name' => 'Linea Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sepolia.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.sepolia.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia.lineascan.build',
          'apiUrl' => 'https://api-sepolia.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 227427,
        ),
      ),
      'testnet' => true,
    ),
    'lineaTestnet' => 
    array (
      'id' => 59140,
      'name' => 'Linea Goerli Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.goerli.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.goerli.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli.lineascan.build',
          'apiUrl' => 'https://goerli.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 498623,
        ),
      ),
      'testnet' => true,
    ),
    'lisk' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xA9d71E1dd7ca26F26e656E66d6AA81ed7f745bf0',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x113cB99283AF242Da0A0C54347667edF531Aa7d6',
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x26dB93F8b8b4f7016240af62F7730979d353f9A7',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x2658723Bf70c7667De6B25F99fcce13A16D25d08',
          ),
        ),
      ),
      'id' => 1135,
      'name' => 'Lisk',
      'network' => 'lisk',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.api.lisk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.lisk.com',
          'apiUrl' => 'https://blockscout.lisk.com/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'liskSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0xA0E35F56C318DE1bD5D9ca6A94Fe7e37C5663348',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xe3d90F21490686Ec7eF37BE788E02dfC12787264',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0x1Fb30e446eA791cd1f011675E5F3f5311b70faF5',
          ),
        ),
      ),
      'id' => 4202,
      'network' => 'lisk-sepolia',
      'name' => 'Lisk Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sepolia-api.lisk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://sepolia-blockscout.lisk.com',
          'apiUrl' => 'https://sepolia-blockscout.lisk.com/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'localhost' => 
    array (
      'id' => 1337,
      'name' => 'Localhost',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    'loop' => 
    array (
      'id' => 15551,
      'name' => 'LoopNetwork Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'LOOP',
        'symbol' => 'LOOP',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.mainnetloop.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LoopNetwork Blockchain Explorer',
          'url' => 'https://explorer.mainnetloop.com/',
        ),
      ),
      'testnet' => false,
    ),
    'lukso' => 
    array (
      'id' => 42,
      'network' => 'lukso',
      'name' => 'LUKSO',
      'nativeCurrency' => 
      array (
        'name' => 'LUKSO',
        'symbol' => 'LYX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.lukso.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws-rpc.mainnet.lukso.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LUKSO Mainnet Explorer',
          'url' => 'https://explorer.execution.mainnet.lukso.network',
          'apiUrl' => 'https://api.explorer.execution.mainnet.lukso.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 468183,
        ),
      ),
    ),
    'luksoTestnet' => 
    array (
      'id' => 4201,
      'name' => 'LUKSO Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'LUKSO Testnet',
        'symbol' => 'LYXt',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.lukso.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws-rpc.testnet.lukso.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LUKSO Testnet Explorer',
          'url' => 'https://explorer.execution.testnet.lukso.network',
          'apiUrl' => 'https://api.explorer.execution.testnet.lukso.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 605348,
        ),
      ),
      'testnet' => true,
    ),
    'lycan' => 
    array (
      'id' => 721,
      'name' => 'Lycan',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Lycan',
        'symbol' => 'LYC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.lycanchain.com',
            1 => 'https://us-east.lycanchain.com',
            2 => 'https://us-west.lycanchain.com',
            3 => 'https://eu-north.lycanchain.com',
            4 => 'https://eu-west.lycanchain.com',
            5 => 'https://asia-southeast.lycanchain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.lycanchain.com',
            1 => 'wss://us-east.lycanchain.com',
            2 => 'wss://us-west.lycanchain.com',
            3 => 'wss://eu-north.lycanchain.com',
            4 => 'wss://eu-west.lycanchain.com',
            5 => 'wss://asia-southeast.lycanchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Lycan Explorer',
          'url' => 'https://explorer.lycanchain.com',
        ),
      ),
    ),
    'lyra' => 
    array (
      'id' => 957,
      'name' => 'Lyra Chain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.lyra.finance',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Lyra Explorer',
          'url' => 'https://explorer.lyra.finance',
          'apiUrl' => 'https://explorer.lyra.finance/api/v2',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1935198,
        ),
      ),
    ),
    'mainnet' => 
    array (
      'id' => 1,
      'name' => 'Ethereum',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://cloudflare-eth.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://etherscan.io',
          'apiUrl' => 'https://api.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xce01f8eee7E479C928F8919abD53E553a36CeF67',
          'blockCreated' => 19258213,
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14353601,
        ),
      ),
    ),
    'mandala' => 
    array (
      'id' => 595,
      'name' => 'Mandala TC9',
      'network' => 'mandala',
      'nativeCurrency' => 
      array (
        'name' => 'Mandala',
        'symbol' => 'mACA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth-rpc-tc9.aca-staging.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://eth-rpc-tc9.aca-staging.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mandala Blockscout',
          'url' => 'https://blockscout.mandala.aca-staging.network',
          'apiUrl' => 'https://blockscout.mandala.aca-staging.network/api',
        ),
      ),
      'testnet' => true,
    ),
    'manta' => 
    array (
      'id' => 169,
      'name' => 'Manta Pacific Mainnet',
      'network' => 'manta',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://pacific-rpc.manta.network/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Manta Explorer',
          'url' => 'https://pacific-explorer.manta.network',
          'apiUrl' => 'https://pacific-explorer.manta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 332890,
        ),
      ),
    ),
    'mantaSepoliaTestnet' => 
    array (
      'id' => 3441006,
      'name' => 'Manta Pacific Sepolia Testnet',
      'network' => 'manta-sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://pacific-rpc.sepolia-testnet.manta.network/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Manta Sepolia Testnet Explorer',
          'url' => 'https://pacific-explorer.sepolia-testnet.manta.network',
          'apiUrl' => 'https://pacific-explorer.sepolia-testnet.manta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca54918f7B525C8df894668846506767412b53E3',
          'blockCreated' => 479584,
        ),
      ),
      'testnet' => true,
    ),
    'mantaTestnet' => 
    array (
      'id' => 3441005,
      'name' => 'Manta Pacific Testnet',
      'network' => 'manta-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://manta-testnet.calderachain.xyz/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Manta Testnet Explorer',
          'url' => 'https://pacific-explorer.testnet.manta.network',
          'apiUrl' => 'https://pacific-explorer.testnet.manta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x211B1643b95Fe76f11eD8880EE810ABD9A4cf56C',
          'blockCreated' => 419915,
        ),
      ),
      'testnet' => true,
    ),
    'mantle' => 
    array (
      'id' => 5000,
      'name' => 'Mantle',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MNT',
        'symbol' => 'MNT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mantle.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mantle Explorer',
          'url' => 'https://mantlescan.xyz/',
          'apiUrl' => 'https://api.mantlescan.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 304717,
        ),
      ),
    ),
    'mantleSepoliaTestnet' => 
    array (
      'id' => 5003,
      'name' => 'Mantle Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MNT',
        'symbol' => 'MNT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sepolia.mantle.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mantle Testnet Explorer',
          'url' => 'https://explorer.sepolia.mantle.xyz/',
          'apiUrl' => 'https://explorer.sepolia.mantle.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 4584012,
        ),
      ),
      'testnet' => true,
    ),
    'mantleTestnet' => 
    array (
      'id' => 5001,
      'name' => 'Mantle Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MNT',
        'symbol' => 'MNT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.mantle.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mantle Testnet Explorer',
          'url' => 'https://explorer.testnet.mantle.xyz',
          'apiUrl' => 'https://explorer.testnet.mantle.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 561333,
        ),
      ),
      'testnet' => true,
    ),
    'mapProtocol' => 
    array (
      'id' => 22776,
      'name' => 'MAP Protocol',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MAPO',
        'symbol' => 'MAPO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.maplabs.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MAPO Scan',
          'url' => 'https://maposcan.io',
        ),
      ),
      'testnet' => false,
    ),
    'matchain' => 
    array (
      'id' => 698,
      'name' => 'Matchain',
      'nativeCurrency' => 
      array (
        'name' => 'BNB',
        'symbol' => 'BNB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.matchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Matchain Scan',
          'url' => 'https://matchscan.io',
        ),
      ),
    ),
    'matchainTestnet' => 
    array (
      'id' => 699,
      'name' => 'Matchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BNB',
        'symbol' => 'BNB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.matchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Matchain Scan',
          'url' => 'https://testnet.matchscan.io',
        ),
      ),
      'testnet' => true,
    ),
    'merlin' => 
    array (
      'id' => 4200,
      'name' => 'Merlin',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.merlinchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://scan.merlinchain.io',
          'apiUrl' => 'https://scan.merlinchain.io/api',
        ),
      ),
    ),
    'metachain' => 
    array (
      'id' => 571,
      'name' => 'MetaChain Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Metatime Coin',
        'symbol' => 'MTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.metatime.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MetaExplorer',
          'url' => 'https://explorer.metatime.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0000000000000000000000000000000000003001',
          'blockCreated' => 0,
        ),
      ),
    ),
    'metachainIstanbul' => 
    array (
      'id' => 1453,
      'name' => 'MetaChain Istanbul',
      'nativeCurrency' => 
      array (
        'name' => 'Metatime Coin',
        'symbol' => 'MTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://istanbul-rpc.metachain.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MetaExplorer',
          'url' => 'https://istanbul-explorer.metachain.dev',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0000000000000000000000000000000000003001',
          'blockCreated' => 0,
        ),
      ),
      'testnet' => true,
    ),
    'metalL2' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x3B1F7aDa0Fcc26B13515af752Dd07fB1CAc11426',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 0,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x3F37aBdE2C6b5B2ed6F8045787Df1ED1E3753956',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x6d0f65D59b55B0FEC5d2d15365154DcADC140BF3',
          ),
        ),
      ),
      'id' => 1750,
      'name' => 'Metal L2',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.metall2.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.metall2.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.metall2.com',
          'apiUrl' => 'https://explorer.metall2.com/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'meter' => 
    array (
      'id' => 82,
      'name' => 'Meter',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MTR',
        'symbol' => 'MTR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.meter.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MeterScan',
          'url' => 'https://scan.meter.io',
        ),
      ),
    ),
    'meterTestnet' => 
    array (
      'id' => 83,
      'name' => 'Meter Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MTR',
        'symbol' => 'MTR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpctest.meter.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MeterTestnetScan',
          'url' => 'https://scan-warringstakes.meter.io',
        ),
      ),
    ),
    'metis' => 
    array (
      'id' => 1088,
      'name' => 'Metis',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Metis',
        'symbol' => 'METIS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://andromeda.metis.io/?owner=1088',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Metis Explorer',
          'url' => 'https://explorer.metis.io',
          'apiUrl' => 'https://api.routescan.io/v2/network/mainnet/evm/1088/etherscan/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 2338552,
        ),
      ),
    ),
    'metisGoerli' => 
    array (
      'id' => 599,
      'name' => 'Metis Goerli',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Metis Goerli',
        'symbol' => 'METIS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli.gateway.metisdevops.link',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Metis Goerli Explorer',
          'url' => 'https://goerli.explorer.metisdevops.link',
          'apiUrl' => 'https://goerli.explorer.metisdevops.link/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1006207,
        ),
      ),
    ),
    'mev' => 
    array (
      'id' => 7518,
      'name' => 'MEVerse Chain Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MEVerse',
        'symbol' => 'MEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.meversemainnet.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://www.meversescan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 86881340,
        ),
      ),
    ),
    'mevTestnet' => 
    array (
      'id' => 4759,
      'name' => 'MEVerse Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MEVerse',
        'symbol' => 'MEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.meversetestnet.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://testnet.meversescan.io/',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 64371115,
        ),
      ),
      'testnet' => true,
    ),
    'mint' => 
    array (
      'id' => 185,
      'name' => 'Mint Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mintchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mintchain explorer',
          'url' => 'https://explorer.mintchain.io',
        ),
      ),
      'testnet' => false,
    ),
    'mintSepoliaTestnet' => 
    array (
      'id' => 1686,
      'name' => 'Mint Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.mintchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mintchain Testnet explorer',
          'url' => 'https://testnet-explorer.mintchain.io',
        ),
      ),
      'testnet' => true,
    ),
    'mode' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 2465882,
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x4317ba146D4933D889518a3e5E11Fe7a53199b04',
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x8B34b14c7c7123459Cf3076b8Cb929BE097d0C07',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x735aDBbE72226BD52e818E7181953f42E3b0FF21',
          ),
        ),
      ),
      'id' => 34443,
      'name' => 'Mode Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.mode.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Modescan',
          'url' => 'https://modescan.io',
        ),
      ),
      'sourceId' => 1,
    ),
    'modeTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x2634BD65ba27AB63811c74A63118ACb312701Bfa',
            'blockCreated' => 3778393,
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x320e1580effF37E008F1C92700d1eBa47c1B23fD',
            'blockCreated' => 3778395,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xbC5C679879B2965296756CD959C3C739769995E2',
            'blockCreated' => 3778392,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xBAba8373113Fb7a68f195deF18732e01aF8eDfCF',
          'blockCreated' => 3019007,
        ),
      ),
      'id' => 919,
      'name' => 'Mode Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.mode.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://sepolia.explorer.mode.network',
          'apiUrl' => 'https://sepolia.explorer.mode.network/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'moonbaseAlpha' => 
    array (
      'id' => 1287,
      'name' => 'Moonbase Alpha',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DEV',
        'symbol' => 'DEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.api.moonbase.moonbeam.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://wss.api.moonbase.moonbeam.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Moonscan',
          'url' => 'https://moonbase.moonscan.io',
          'apiUrl' => 'https://moonbase.moonscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1850686,
        ),
      ),
      'testnet' => true,
    ),
    'moonbeam' => 
    array (
      'id' => 1284,
      'name' => 'Moonbeam',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'GLMR',
        'symbol' => 'GLMR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://moonbeam.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://moonbeam.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Moonscan',
          'url' => 'https://moonscan.io',
          'apiUrl' => 'https://api-moonbeam.moonscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 609002,
        ),
      ),
      'testnet' => false,
    ),
    'moonbeamDev' => 
    array (
      'id' => 1281,
      'name' => 'Moonbeam Development Node',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DEV',
        'symbol' => 'DEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:9944',
          ),
          'webSocket' => 
          array (
            0 => 'wss://127.0.0.1:9944',
          ),
        ),
      ),
    ),
    'moonriver' => 
    array (
      'id' => 1285,
      'name' => 'Moonriver',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MOVR',
        'symbol' => 'MOVR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://moonriver.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://moonriver.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Moonscan',
          'url' => 'https://moonriver.moonscan.io',
          'apiUrl' => 'https://api-moonriver.moonscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1597904,
        ),
      ),
      'testnet' => false,
    ),
    'morphHolesky' => 
    array (
      'id' => 2810,
      'name' => 'Morph Holesky',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-quicknode-holesky.morphl2.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-quicknode-holesky.morphl2.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Morph Holesky Explorer',
          'url' => 'https://explorer-holesky.morphl2.io',
          'apiUrl' => 'https://explorer-api-holesky.morphl2.io/api?',
        ),
      ),
      'testnet' => true,
    ),
    'morphSepolia' => 
    array (
      'id' => 2710,
      'name' => 'Morph Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.morphl2.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Morph Testnet Explorer',
          'url' => 'https://explorer-testnet.morphl2.io',
          'apiUrl' => 'https://explorer-api-testnet.morphl2.io/api',
        ),
      ),
      'testnet' => true,
    ),
    'nautilus' => 
    array (
      'id' => 22222,
      'name' => 'Nautilus Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'ZBC',
        'symbol' => 'ZBC',
        'decimals' => 9,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.nautilus.nautchain.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'NautScan',
          'url' => 'https://nautscan.com',
        ),
      ),
    ),
    'neonDevnet' => 
    array (
      'id' => 245022926,
      'name' => 'Neon EVM DevNet',
      'nativeCurrency' => 
      array (
        'name' => 'NEON',
        'symbol' => 'NEON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://devnet.neonevm.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Neonscan',
          'url' => 'https://devnet.neonscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 205206112,
        ),
      ),
      'testnet' => true,
    ),
    'neonMainnet' => 
    array (
      'id' => 245022934,
      'network' => 'neonMainnet',
      'name' => 'Neon EVM MainNet',
      'nativeCurrency' => 
      array (
        'name' => 'NEON',
        'symbol' => 'NEON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://neon-proxy-mainnet.solana.p2p.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Neonscan',
          'url' => 'https://neonscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 206545524,
        ),
      ),
      'testnet' => false,
    ),
    'nexi' => 
    array (
      'id' => 4242,
      'name' => 'Nexi',
      'nativeCurrency' => 
      array (
        'name' => 'Nexi',
        'symbol' => 'NEXI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.chain.nexi.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'NexiScan',
          'url' => 'https://www.nexiscan.com',
          'apiUrl' => 'https://www.nexiscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0277A46Cc69A57eE3A6C8c158bA874832F718B8E',
          'blockCreated' => 25770160,
        ),
      ),
    ),
    'nexilix' => 
    array (
      'id' => 240,
      'name' => 'Nexilix Smart Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Nexilix',
        'symbol' => 'NEXILIX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcurl.pos.nexilix.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'NexilixScan',
          'url' => 'https://scan.nexilix.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x58381c8e2BF9d0C2C4259cA14BdA9Afe02831244',
          'blockCreated' => 74448,
        ),
      ),
    ),
    'oasys' => 
    array (
      'id' => 248,
      'name' => 'Oasys',
      'nativeCurrency' => 
      array (
        'name' => 'Oasys',
        'symbol' => 'OAS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.oasys.games',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OasysScan',
          'url' => 'https://scan.oasys.games',
          'apiUrl' => 'https://scan.oasys.games/api',
        ),
      ),
    ),
    'oasisTestnet' => 
    array (
      'id' => 4090,
      'network' => 'oasis-testnet',
      'name' => 'Oasis Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Fasttoken',
        'symbol' => 'FTN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc1.oasis.bahamutchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ftnscan',
          'url' => 'https://oasis.ftnscan.com',
          'apiUrl' => 'https://oasis.ftnscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    'odysseyTestnet' => 
    array (
      'id' => 911867,
      'name' => 'Odyssey Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://odyssey.ithaca.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Odyssey Explorer',
          'url' => 'https://odyssey-explorer.ithaca.xyz',
          'apiUrl' => 'https://odyssey-explorer.ithaca.xyz/api',
        ),
      ),
      'testnet' => true,
    ),
    'okc' => 
    array (
      'id' => 66,
      'name' => 'OKC',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKT',
        'symbol' => 'OKT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://exchainrpc.okex.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'oklink',
          'url' => 'https://www.oklink.com/okc',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 10364792,
        ),
      ),
    ),
    'optimism' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          1 => 
          array (
            'address' => '0xe5965Ab5962eDc7477C8520243A95517CD252fA9',
          ),
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xdfe97868233d1aa22e815a266982f2cf17685a27',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 4286263,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xbEb5Fc579115071764c7423A4f12eDde41f106Ed',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x99C9fc46f92E8a1c0deC1b1747d010903E884bE1',
          ),
        ),
      ),
      'id' => 10,
      'name' => 'OP Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.optimism.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Optimism Explorer',
          'url' => 'https://optimistic.etherscan.io',
          'apiUrl' => 'https://api-optimistic.etherscan.io/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'optimismGoerli' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          5 => 
          array (
            'address' => '0xE6Dfba0953616Bacab0c9A8ecb3a9BBa77FC15c0',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 49461,
        ),
        'portal' => 
        array (
          5 => 
          array (
            'address' => '0x5b47E1A08Ea6d985D6649300584e6722Ec4B1383',
          ),
        ),
        'l1StandardBridge' => 
        array (
          5 => 
          array (
            'address' => '0x636Af16bf2f682dD3109e60102b8E1A089FedAa8',
          ),
        ),
      ),
      'id' => 420,
      'name' => 'Optimism Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli.optimism.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli-optimism.etherscan.io',
          'apiUrl' => 'https://goerli-optimism.etherscan.io/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 5,
    ),
    'optimismSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0x05F9613aDB30026FFd634f38e5C4dFd30a197Fa1',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x90E9c4f8a994a250F6aEfd61CAFb4F2e895D458F',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1620204,
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x16Fc5058F25648194471939df75CF27A2fdC48BC',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xFBb0621E0B23b5478B630BD55a5f21f67730B0F1',
          ),
        ),
      ),
      'id' => 11155420,
      'name' => 'OP Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.optimism.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://optimism-sepolia.blockscout.com',
          'apiUrl' => 'https://optimism-sepolia.blockscout.com/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'optopia' => 
    array (
      'id' => 62050,
      'name' => 'Optopia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet.optopia.ai',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Optopia Explorer',
          'url' => 'https://scan.optopia.ai',
        ),
      ),
      'testnet' => false,
    ),
    'optopiaTestnet' => 
    array (
      'id' => 62049,
      'name' => 'Optopia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.optopia.ai',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Optopia Explorer',
          'url' => 'https://scan-testnet.optopia.ai',
        ),
      ),
      'testnet' => true,
    ),
    'opBNB' => 
    array (
      'id' => 204,
      'name' => 'opBNB',
      'nativeCurrency' => 
      array (
        'name' => 'BNB',
        'symbol' => 'BNB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://opbnb-mainnet-rpc.bnbchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'opBNB (BSCScan)',
          'url' => 'https://opbnb.bscscan.com',
          'apiUrl' => 'https://api-opbnb.bscscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 512881,
        ),
        'l2OutputOracle' => 
        array (
          56 => 
          array (
            'address' => '0x153CAB79f4767E2ff862C94aa49573294B13D169',
          ),
        ),
        'portal' => 
        array (
          56 => 
          array (
            'address' => '0x1876EA7702C0ad0C6A2ae6036DE7733edfBca519',
          ),
        ),
        'l1StandardBridge' => 
        array (
          56 => 
          array (
            'address' => '0xF05F0e4362859c3331Cb9395CBC201E3Fa6757Ea',
          ),
        ),
      ),
      'sourceId' => 56,
    ),
    'opBNBTestnet' => 
    array (
      'id' => 5611,
      'name' => 'opBNB Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'tBNB',
        'symbol' => 'tBNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://opbnb-testnet-rpc.bnbchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'opbnbscan',
          'url' => 'https://testnet.opbnbscan.com',
        ),
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3705108,
        ),
        'l2OutputOracle' => 
        array (
          97 => 
          array (
            'address' => '0xFf2394Bb843012562f4349C6632a0EcB92fC8810',
          ),
        ),
        'portal' => 
        array (
          97 => 
          array (
            'address' => '0x4386C8ABf2009aC0c263462Da568DD9d46e52a31',
          ),
        ),
        'l1StandardBridge' => 
        array (
          97 => 
          array (
            'address' => '0x677311Fd2cCc511Bbc0f581E8d9a07B033D5E840',
          ),
        ),
      ),
      'testnet' => true,
      'sourceId' => 97,
    ),
    'oortMainnetDev' => 
    array (
      'id' => 9700,
      'name' => 'OORT MainnetDev',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OORT',
        'symbol' => 'OORT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dev-rpc.oortech.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OORT MainnetDev Explorer',
          'url' => 'https://dev-scan.oortech.com',
        ),
      ),
    ),
    'orderly' => 
    array (
      'id' => 291,
      'name' => 'Orderly',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.orderly.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Orderly Explorer',
          'url' => 'https://explorer.orderly.network',
        ),
      ),
      'testnet' => false,
    ),
    'orderlySepolia' => 
    array (
      'id' => 4460,
      'name' => 'Orderly Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://l2-orderly-l2-4460-sepolia-8tc3sd7dvy.t.conduit.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Orderly Explorer',
          'url' => 'https://explorerl2new-orderly-l2-4460-sepolia-8tc3sd7dvy.t.conduit.xyz',
        ),
      ),
      'testnet' => true,
    ),
    'otimDevnet' => 
    array (
      'id' => 41144114,
      'name' => 'Otim Devnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://devnet.otim.xyz',
          ),
        ),
      ),
      'contracts' => 
      array (
        'batchInvoker' => 
        array (
          'address' => '0x5FbDB2315678afecb367f032d93F642f64180aa3',
        ),
      ),
    ),
    'palm' => 
    array (
      'id' => 11297108109,
      'name' => 'Palm',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'PALM',
        'symbol' => 'PALM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://palm-mainnet.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://palm-mainnet.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chainlens',
          'url' => 'https://palm.chainlens.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 15429248,
        ),
      ),
    ),
    'palmTestnet' => 
    array (
      'id' => 11297108099,
      'name' => 'Palm Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'PALM',
        'symbol' => 'PALM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://palm-mainnet.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://palm-mainnet.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chainlens',
          'url' => 'https://palm.chainlens.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 15429248,
        ),
      ),
      'testnet' => true,
    ),
    'playfiAlbireo' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 1612127,
      'name' => 'PlayFi Albireo Testnet',
      'network' => 'albireo',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://albireo-rpc.playfi.ai',
          ),
          'webSocket' => 
          array (
            0 => 'wss://albireo-rpc-ws.playfi.ai/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PlayFi Albireo Explorer',
          'url' => 'https://albireo-explorer.playfi.ai',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
      ),
      'testnet' => true,
    ),
    'pgn' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'id' => 424,
      'network' => 'pgn',
      'name' => 'PGN',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.publicgoods.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PGN Explorer',
          'url' => 'https://explorer.publicgoods.network',
          'apiUrl' => 'https://explorer.publicgoods.network/api',
        ),
      ),
      'contracts' => 
      array (
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x9E6204F750cD866b299594e2aC9eA824E2e5f95c',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3380209,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xb26Fd985c5959bBB382BAFdD0b879E149e48116c',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0xD0204B9527C1bA7bD765Fa5CCD9355d38338272b',
          ),
        ),
      ),
      'sourceId' => 1,
    ),
    'pgnTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'id' => 58008,
      'network' => 'pgn-testnet',
      'name' => 'PGN ',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.publicgoods.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PGN Testnet Explorer',
          'url' => 'https://explorer.sepolia.publicgoods.network',
          'apiUrl' => 'https://explorer.sepolia.publicgoods.network/api',
        ),
      ),
      'contracts' => 
      array (
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0xD5bAc3152ffC25318F848B3DD5dA6C85171BaEEe',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xF04BdD5353Bb0EFF6CA60CfcC78594278eBfE179',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xFaE6abCAF30D23e233AC7faF747F2fC3a5a6Bfa3',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3754925,
        ),
      ),
      'sourceId' => 11155111,
      'testnet' => true,
    ),
    'phoenix' => 
    array (
      'id' => 13381,
      'name' => 'Phoenix Blockchain',
      'nativeCurrency' => 
      array (
        'name' => 'Phoenix',
        'symbol' => 'PHX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.phoenixplorer.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Phoenixplorer',
          'url' => 'https://phoenixplorer.com',
          'apiUrl' => 'https://phoenixplorer.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x498cF757a575cFF2c2Ed9f532f56Efa797f86442',
          'blockCreated' => 5620192,
        ),
      ),
    ),
    'plinga' => 
    array (
      'id' => 242,
      'name' => 'Plinga',
      'nativeCurrency' => 
      array (
        'name' => 'Plinga',
        'symbol' => 'PLINGA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcurl.mainnet.plgchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Plgscan',
          'url' => 'https://www.plgscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0989576160f2e7092908BB9479631b901060b6e4',
          'blockCreated' => 204489,
        ),
      ),
    ),
    'plumeTestnet' => 
    array (
      'id' => 161221135,
      'name' => 'Plume Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Plume Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.plumenetwork.xyz/http',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-rpc.plumenetwork.xyz/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet-explorer.plumenetwork.xyz',
          'apiUrl' => 'https://testnet-explorer.plumenetwork.xyz/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'polygon' => 
    array (
      'id' => 137,
      'name' => 'Polygon',
      'nativeCurrency' => 
      array (
        'name' => 'POL',
        'symbol' => 'POL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://polygon-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://polygonscan.com',
          'apiUrl' => 'https://api.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 25770160,
        ),
      ),
    ),
    'polygonAmoy' => 
    array (
      'id' => 80002,
      'name' => 'Polygon Amoy',
      'nativeCurrency' => 
      array (
        'name' => 'MATIC',
        'symbol' => 'MATIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-amoy.polygon.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://amoy.polygonscan.com',
          'apiUrl' => 'https://api-amoy.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 3127388,
        ),
      ),
      'testnet' => true,
    ),
    'polygonMumbai' => 
    array (
      'id' => 80001,
      'name' => 'Polygon Mumbai',
      'nativeCurrency' => 
      array (
        'name' => 'MATIC',
        'symbol' => 'MATIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/polygon_mumbai',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://mumbai.polygonscan.com',
          'apiUrl' => 'https://api-testnet.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 25770160,
        ),
      ),
      'testnet' => true,
    ),
    'polygonZkEvm' => 
    array (
      'id' => 1101,
      'name' => 'Polygon zkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zkevm-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://zkevm.polygonscan.com',
          'apiUrl' => 'https://api-zkevm.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 57746,
        ),
      ),
    ),
    'polygonZkEvmCardona' => 
    array (
      'id' => 2442,
      'name' => 'Polygon zkEVM Cardona',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.cardona.zkevm-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://cardona-zkevm.polygonscan.com',
          'apiUrl' => 'https://cardona-zkevm.polygonscan.com/api',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 114091,
        ),
      ),
    ),
    'polygonZkEvmTestnet' => 
    array (
      'id' => 1442,
      'name' => 'Polygon zkEVM Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.public.zkevm-test.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://testnet-zkevm.polygonscan.com',
          'apiUrl' => 'https://testnet-zkevm.polygonscan.com/api',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 525686,
        ),
      ),
    ),
    'pulsechain' => 
    array (
      'id' => 369,
      'name' => 'PulseChain',
      'nativeCurrency' => 
      array (
        'name' => 'Pulse',
        'symbol' => 'PLS',
        'decimals' => 18,
      ),
      'testnet' => false,
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.pulsechain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.pulsechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PulseScan',
          'url' => 'https://scan.pulsechain.com',
          'apiUrl' => 'https://api.scan.pulsechain.com/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14353601,
        ),
      ),
    ),
    'pulsechainV4' => 
    array (
      'id' => 943,
      'name' => 'PulseChain V4',
      'testnet' => true,
      'nativeCurrency' => 
      array (
        'name' => 'V4 Pulse',
        'symbol' => 'v4PLS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.v4.testnet.pulsechain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.v4.testnet.pulsechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PulseScan',
          'url' => 'https://scan.v4.testnet.pulsechain.com',
          'apiUrl' => 'https://scan.v4.testnet.pulsechain.com/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14353601,
        ),
      ),
    ),
    'qMainnet' => 
    array (
      'id' => 35441,
      'name' => 'Q Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Q',
        'symbol' => 'Q',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.q.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Q Mainnet Explorer',
          'url' => 'https://explorer.q.org',
          'apiUrl' => 'https://explorer.q.org/api',
        ),
      ),
    ),
    'qTestnet' => 
    array (
      'id' => 35443,
      'name' => 'Q Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Q',
        'symbol' => 'Q',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.qtestnet.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Q Testnet Explorer',
          'url' => 'https://explorer.qtestnet.org',
          'apiUrl' => 'https://explorer.qtestnet.org/api',
        ),
      ),
      'testnet' => true,
    ),
    'real' => 
    array (
      'id' => 111188,
      'name' => 're.al',
      'nativeCurrency' => 
      array (
        'name' => 'reETH',
        'decimals' => 18,
        'symbol' => 'reETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://real.drpc.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 're.al Explorer',
          'url' => 'https://explorer.re.al',
          'apiUrl' => 'https://explorer.re.al/api/v2',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 695,
        ),
      ),
    ),
    'redbellyTestnet' => 
    array (
      'id' => 153,
      'name' => 'Redbelly Network Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Redbelly Native Coin',
        'symbol' => 'RBNT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://governors.testnet.redbelly.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ethernal',
          'url' => 'https://explorer.testnet.redbelly.network',
          'apiUrl' => 'https://ethernal.fly.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    'redstone' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xC7bCb0e8839a28A1cFadd1CF716de9016CdA51ae',
            'blockCreated' => 19578329,
          ),
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xa426A052f657AEEefc298b3B5c35a470e4739d69',
            'blockCreated' => 19578337,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0xc473ca7E02af24c129c2eEf51F2aDf0411c1Df69',
            'blockCreated' => 19578331,
          ),
        ),
      ),
      'name' => 'Redstone',
      'id' => 690,
      'sourceId' => 1,
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.redstonechain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.redstonechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.redstone.xyz',
        ),
      ),
    ),
    'reyaNetwork' => 
    array (
      'id' => 1729,
      'name' => 'Reya Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.reya.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.reya.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Reya Network Explorer',
          'url' => 'https://explorer.reya.network',
        ),
      ),
      'testnet' => false,
    ),
    'rollux' => 
    array (
      'id' => 570,
      'name' => 'Rollux Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.rollux.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.rollux.com/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RolluxExplorer',
          'url' => 'https://explorer.rollux.com',
          'apiUrl' => 'https://explorer.rollux.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 119222,
        ),
      ),
    ),
    'rolluxTestnet' => 
    array (
      'id' => 57000,
      'name' => 'Rollux Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-tanenbaum.rollux.com/',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-tanenbaum.rollux.com/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RolluxTestnetExplorer',
          'url' => 'https://rollux.tanenbaum.io',
          'apiUrl' => 'https://rollux.tanenbaum.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1813675,
        ),
      ),
    ),
    'ronin' => 
    array (
      'id' => 2020,
      'name' => 'Ronin',
      'nativeCurrency' => 
      array (
        'name' => 'RON',
        'symbol' => 'RON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.roninchain.com/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ronin Explorer',
          'url' => 'https://app.roninchain.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 26023535,
        ),
      ),
    ),
    'root' => 
    array (
      'id' => 7668,
      'name' => 'The Root Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'XRP',
        'symbol' => 'XRP',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://root.rootnet.live/archive',
          ),
          'webSocket' => 
          array (
            0 => 'wss://root.rootnet.live/archive/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Rootscan',
          'url' => 'https://rootscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xc9C2E2429AeC354916c476B30d729deDdC94988d',
          'blockCreated' => 9218338,
        ),
      ),
    ),
    'rootPorcini' => 
    array (
      'id' => 7672,
      'name' => 'The Root Network - Porcini',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'XRP',
        'symbol' => 'XRP',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://porcini.rootnet.app/archive',
          ),
          'webSocket' => 
          array (
            0 => 'wss://porcini.rootnet.app/archive/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Rootscan',
          'url' => 'https://porcini.rootscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xc9C2E2429AeC354916c476B30d729deDdC94988d',
          'blockCreated' => 10555692,
        ),
      ),
      'testnet' => true,
    ),
    'rootstock' => 
    array (
      'id' => 30,
      'name' => 'Rootstock Mainnet',
      'network' => 'rootstock',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Rootstock Bitcoin',
        'symbol' => 'RBTC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-node.rsk.co',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSK Explorer',
          'url' => 'https://explorer.rsk.co',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 4249540,
        ),
      ),
    ),
    'rootstockTestnet' => 
    array (
      'id' => 31,
      'name' => 'Rootstock Testnet',
      'network' => 'rootstock',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Rootstock Bitcoin',
        'symbol' => 'tRBTC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-node.testnet.rsk.co',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSK Explorer',
          'url' => 'https://explorer.testnet.rootstock.io',
        ),
      ),
      'testnet' => true,
    ),
    'rss3' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xE6f24d2C32B3109B18ed33cF08eFb490b1e09C10',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14193,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x6A12432491bbbE8d3babf75F759766774C778Db4',
            'blockCreated' => 19387057,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x4cbab69108Aa72151EDa5A3c164eA86845f18438',
          ),
        ),
      ),
      'id' => 12553,
      'name' => 'RSS3 VSL Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'RSS3',
        'symbol' => 'RSS3',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.rss3.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSS3 VSL Mainnet Scan',
          'url' => 'https://scan.rss3.io',
          'apiUrl' => 'https://scan.rss3.io/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'rss3Sepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0xDb5c46C3Eaa6Ed6aE8b2379785DF7dd029C0dC81',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 55697,
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xcBD77E8E1E7F06B25baDe67142cdE82652Da7b57',
            'blockCreated' => 5345035,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xdDD29bb63B0839FB1cE0eE439Ff027738595D07B',
          ),
        ),
      ),
      'id' => 2331,
      'name' => 'RSS3 VSL Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'RSS3',
        'symbol' => 'RSS3',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.rss3.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSS3 VSL Sepolia Testnet Scan',
          'url' => 'https://scan.testnet.rss3.io',
          'apiUrl' => 'https://scan.testnet.rss3.io/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'saigon' => 
    array (
      'id' => 2021,
      'name' => 'Saigon Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'RON',
        'symbol' => 'RON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://saigon-testnet.roninchain.com/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Saigon Explorer',
          'url' => 'https://saigon-app.roninchain.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 18736871,
        ),
      ),
      'testnet' => true,
    ),
    'sapphire' => 
    array (
      'id' => 23294,
      'name' => 'Oasis Sapphire',
      'network' => 'sapphire',
      'nativeCurrency' => 
      array (
        'name' => 'Sapphire Rose',
        'symbol' => 'ROSE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sapphire.oasis.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sapphire.oasis.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Oasis Explorer',
          'url' => 'https://explorer.oasis.io/mainnet/sapphire',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 734531,
        ),
      ),
    ),
    'sapphireTestnet' => 
    array (
      'id' => 23295,
      'name' => 'Oasis Sapphire Testnet',
      'network' => 'sapphire-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sapphire Test Rose',
        'symbol' => 'TEST',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.sapphire.oasis.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.sapphire.oasis.dev/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Oasis Explorer',
          'url' => 'https://explorer.oasis.io/testnet/sapphire',
        ),
      ),
      'testnet' => true,
    ),
    'satoshiVM' => 
    array (
      'id' => 3109,
      'name' => 'SatoshiVM Alpha Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://alpha-rpc-node-http.svmscan.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://svmscan.io',
          'apiUrl' => 'https://svmscan.io/api',
        ),
      ),
    ),
    'satoshiVMTestnet' => 
    array (
      'id' => 3110,
      'name' => 'SatoshiVM Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://test-rpc-node-http.svmscan.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://testnet.svmscan.io',
          'apiUrl' => 'https://testnet.svmscan.io/api',
        ),
      ),
      'testnet' => true,
    ),
    'scrollSepolia' => 
    array (
      'id' => 534351,
      'name' => 'Scroll Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rpc.scroll.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Scrollscan',
          'url' => 'https://sepolia.scrollscan.com',
          'apiUrl' => 'https://api-sepolia.scrollscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 9473,
        ),
      ),
      'testnet' => true,
    ),
    'sei' => 
    array (
      'id' => 1329,
      'name' => 'Sei Network',
      'nativeCurrency' => 
      array (
        'name' => 'Sei',
        'symbol' => 'SEI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-rpc.sei-apis.com/',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evm-ws.sei-apis.com/',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Seitrace',
          'url' => 'https://seitrace.com',
          'apiUrl' => 'https://seitrace.com/pacific-1/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
        ),
      ),
    ),
    'seiDevnet' => 
    array (
      'id' => 713715,
      'name' => 'Sei Devnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sei',
        'symbol' => 'SEI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-rpc-arctic-1.sei-apis.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Seitrace',
          'url' => 'https://seitrace.com',
        ),
      ),
      'testnet' => true,
    ),
    'seiTestnet' => 
    array (
      'id' => 1328,
      'name' => 'Sei Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sei',
        'symbol' => 'SEI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-rpc-testnet.sei-apis.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evm-ws-testnet.sei-apis.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Seitrace',
          'url' => 'https://seitrace.com',
        ),
      ),
      'testnet' => true,
    ),
    'sepolia' => 
    array (
      'id' => 11155111,
      'name' => 'Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc2.sepolia.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia.etherscan.io',
          'apiUrl' => 'https://api-sepolia.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 751532,
        ),
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xc8Af999e38273D658BE1b921b88A9Ddf005769cC',
          'blockCreated' => 5317080,
        ),
      ),
      'testnet' => true,
    ),
    'shape' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x6Ef8c69CfE4635d866e3E02732068022c06e724D',
            'blockCreated' => 20369940,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xEB06fFa16011B5628BaB98E29776361c83741dd3',
            'blockCreated' => 20369933,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x62Edd5f4930Ea92dCa3fB81689bDD9b9d076b57B',
            'blockCreated' => 20369935,
          ),
        ),
      ),
      'id' => 360,
      'name' => 'Shape',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.shape.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'shapescan',
          'url' => 'https://shapescan.xyz',
          'apiUrl' => 'https://shapescan.xyz/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'shapeSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1,
        ),
      ),
      'id' => 11011,
      'name' => 'Shape Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.shape.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer-sepolia.shape.network/',
          'apiUrl' => 'https://explorer-sepolia.shape.network/api/v2',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'shimmer' => 
    array (
      'id' => 148,
      'name' => 'Shimmer',
      'network' => 'shimmer',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Shimmer',
        'symbol' => 'SMR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.shimmer.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Shimmer Network Explorer',
          'url' => 'https://explorer.evm.shimmer.network',
          'apiUrl' => 'https://explorer.evm.shimmer.network/api',
        ),
      ),
    ),
    'shimmerTestnet' => 
    array (
      'id' => 1073,
      'name' => 'Shimmer Testnet',
      'network' => 'shimmer-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Shimmer',
        'symbol' => 'SMR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.testnet.shimmer.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Shimmer Network Explorer',
          'url' => 'https://explorer.evm.testnet.shimmer.network',
          'apiUrl' => 'https://explorer.evm.testnet.shimmer.network/api',
        ),
      ),
      'testnet' => true,
    ),
    'skaleBlockBrawlers' => 
    array (
      'id' => 391845894,
      'name' => 'SKALE | Block Brawlers',
      'nativeCurrency' => 
      array (
        'name' => 'BRAWL',
        'symbol' => 'BRAWL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/frayed-decent-antares',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/frayed-decent-antares',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://frayed-decent-antares.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'skaleCalypso' => 
    array (
      'id' => 1564830818,
      'name' => 'SKALE | Calypso NFT Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/honorable-steel-rasalhague',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/honorable-steel-rasalhague',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://honorable-steel-rasalhague.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3107626,
        ),
      ),
    ),
    'skaleCalypsoTestnet' => 
    array (
      'id' => 974399131,
      'name' => 'SKALE Calypso Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/giant-half-dual-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/giant-half-dual-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://giant-half-dual-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 103220,
        ),
      ),
      'testnet' => true,
    ),
    'skaleCryptoBlades' => 
    array (
      'id' => 1026062157,
      'name' => 'SKALE | CryptoBlades',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/affectionate-immediate-pollux',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/affectionate-immediate-pollux',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://affectionate-immediate-pollux.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'skaleCryptoColosseum' => 
    array (
      'id' => 1032942172,
      'name' => 'SKALE | Crypto Colosseum',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/haunting-devoted-deneb',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/haunting-devoted-deneb',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://haunting-devoted-deneb.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'skaleEuropa' => 
    array (
      'id' => 2046399126,
      'name' => 'SKALE | Europa Liquidity Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/elated-tan-skat',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/elated-tan-skat',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://elated-tan-skat.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3113495,
        ),
      ),
    ),
    'skaleEuropaTestnet' => 
    array (
      'id' => 1444673419,
      'name' => 'SKALE Europa Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/juicy-low-small-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/juicy-low-small-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://juicy-low-small-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 110858,
        ),
      ),
      'testnet' => true,
    ),
    'skaleExorde' => 
    array (
      'id' => 2139927552,
      'name' => 'SKALE | Exorde',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/light-vast-diphda',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/light-vast-diphda',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://light-vast-diphda.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'skaleHumanProtocol' => 
    array (
      'id' => 1273227453,
      'name' => 'SKALE | Human Protocol',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/wan-red-ain',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/wan-red-ain',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://wan-red-ain.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'skaleNebula' => 
    array (
      'id' => 1482601649,
      'name' => 'SKALE | Nebula Gaming Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/green-giddy-denebola',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/green-giddy-denebola',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://green-giddy-denebola.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 2372986,
        ),
      ),
    ),
    'skaleNebulaTestnet' => 
    array (
      'id' => 37084624,
      'name' => 'SKALE Nebula Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/lanky-ill-funny-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/lanky-ill-funny-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://lanky-ill-funny-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 105141,
        ),
      ),
      'testnet' => true,
    ),
    'skaleRazor' => 
    array (
      'id' => 278611351,
      'name' => 'SKALE | Razor Network',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/turbulent-unique-scheat',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/turbulent-unique-scheat',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://turbulent-unique-scheat.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    'skaleTitan' => 
    array (
      'id' => 1350216234,
      'name' => 'SKALE | Titan Community Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/parallel-stormy-spica',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/parallel-stormy-spica',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://parallel-stormy-spica.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 2076458,
        ),
      ),
    ),
    'skaleTitanTestnet' => 
    array (
      'id' => 1020352220,
      'name' => 'SKALE Titan Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/aware-fake-trim-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/aware-fake-trim-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://aware-fake-trim-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 104072,
        ),
      ),
      'testnet' => true,
    ),
    'sketchpad' => 
    array (
      'id' => 984123,
      'name' => 'Forma Sketchpad',
      'network' => 'sketchpad',
      'nativeCurrency' => 
      array (
        'symbol' => 'TIA',
        'name' => 'TIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sketchpad-1.forma.art',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.sketchpad-1.forma.art',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Sketchpad Explorer',
          'url' => 'https://explorer.sketchpad-1.forma.art',
        ),
      ),
      'testnet' => true,
    ),
    'snax' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          1 => 
          array (
            'address' => '0x472562Fcf26D6b2793f8E0b0fB660ba0E5e08A46',
          ),
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x2172e492Fc807F5d5645D0E3543f139ECF539294',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x79f446D024d74D0Bb6E699C131c703463c5D65E9',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x6534Bdb6b5c060d3e6aa833433333135eFE8E0aA',
          ),
        ),
      ),
      'id' => 2192,
      'network' => 'snaxchain-mainnet',
      'name' => 'SnaxChain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.snaxchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Snax Explorer',
          'url' => 'https://explorer.snaxchain.io',
          'apiUrl' => 'https://explorer.snaxchain.io/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'snaxTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0x206a75d89d45F146C54020F132FF93bEDD09f55E',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x60e3A368a4cdCEf85ffB964e372726F56A46221e',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xb5afdd0E8dDF081Ef90e8A3e0c7b5798e66E954E',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xbd37E1a59D4C00C9A46F75018dffd84061bC5f74',
          ),
        ),
      ),
      'id' => 13001,
      'network' => 'snaxchain-testnet',
      'name' => 'SnaxChain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.snaxchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Snax Explorer',
          'url' => 'https://testnet-explorer.snaxchain.io',
          'apiUrl' => 'https://testnet-explorer.snaxchain.io/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'soneiumMinato' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0xF69dB6cA559C52d9A4BB6e2B2901f490Ca35Fbf6',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x710e5286C746eC38beeB7538d0146f60D27be343',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x65ea1489741A5D72fFdD8e6485B216bBdcC15Af3',
            'blockCreated' => 6466136,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0x5f5a404A5edabcDD80DB05E8e54A78c9EBF000C2',
            'blockCreated' => 6466136,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1,
        ),
      ),
      'id' => 1946,
      'name' => 'Soneium Minato Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.minato.soneium.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer-testnet.soneium.org',
          'apiUrl' => 'https://explorer-testnet.soneium.org/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'songbird' => 
    array (
      'id' => 19,
      'name' => 'Songbird Canary-Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Songbird',
        'symbol' => 'SGB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://songbird-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Songbird Explorer',
          'url' => 'https://songbird-explorer.flare.network',
          'apiUrl' => 'https://songbird-explorer.flare.network/api',
        ),
      ),
    ),
    'songbirdTestnet' => 
    array (
      'id' => 16,
      'name' => 'Songbird Testnet Coston',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Coston Flare',
        'symbol' => 'CFLR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://coston-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Coston Explorer',
          'url' => 'https://coston-explorer.flare.network',
          'apiUrl' => 'https://coston-explorer.flare.network/api',
        ),
      ),
      'testnet' => true,
    ),
    'sophonTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 531050104,
      'name' => 'Sophon Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Sophon',
        'symbol' => 'SOPH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.sophon.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.testnet.sophon.xyz/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Sophon Block Explorer',
          'url' => 'https://explorer.testnet.sophon.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x83c04d112adedA2C6D9037bb6ecb42E7f0b108Af',
          'blockCreated' => 15642,
        ),
      ),
      'testnet' => true,
    ),
    'spicy' => 
    array (
      'id' => 88882,
      'name' => 'Chiliz Spicy Testnet',
      'network' => 'chiliz-spicy-Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CHZ',
        'symbol' => 'CHZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://spicy-rpc.chiliz.com',
            1 => 'https://chiliz-spicy-rpc.publicnode.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://spicy-rpc-ws.chiliz.com',
            1 => 'wss://chiliz-spicy-rpc.publicnode.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chiliz Explorer',
          'url' => 'http://spicy-explorer.chiliz.com',
          'apiUrl' => 'http://spicy-explorer.chiliz.com/api',
        ),
      ),
      'testnet' => true,
    ),
    'shardeumSphinx' => 
    array (
      'id' => 8082,
      'name' => 'Shardeum Sphinx',
      'nativeCurrency' => 
      array (
        'name' => 'SHARDEUM',
        'symbol' => 'SHM',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sphinx.shardeum.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Shardeum Explorer',
          'url' => 'https://explorer-sphinx.shardeum.org',
        ),
      ),
      'testnet' => true,
    ),
    'shibarium' => 
    array (
      'id' => 109,
      'name' => 'Shibarium',
      'network' => 'shibarium',
      'nativeCurrency' => 
      array (
        'name' => 'Bone',
        'symbol' => 'BONE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.shibrpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://shibariumscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x864Bf681ADD6052395188A89101A1B37d3B4C961',
          'blockCreated' => 265900,
        ),
      ),
    ),
    'shibariumTestnet' => 
    array (
      'id' => 157,
      'name' => 'Puppynet Shibarium',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Bone',
        'symbol' => 'BONE',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://puppynet.shibrpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://puppyscan.shib.io',
          'apiUrl' => 'https://puppyscan.shib.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xA4029b74FBA366c926eDFA7Dd10B21C621170a4c',
          'blockCreated' => 3035769,
        ),
      ),
      'testnet' => true,
    ),
    'storyTestnet' => 
    array (
      'id' => 1513,
      'name' => 'Story Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IP',
        'symbol' => 'IP',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.storyrpc.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Story Testnet Explorer',
          'url' => 'https://testnet.storyscan.xyz',
        ),
      ),
      'testnet' => true,
    ),
    'silicon' => 
    array (
      'id' => 2355,
      'name' => 'Silicon zkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.silicon.network',
            1 => 'https://silicon-mainnet.nodeinfra.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SiliconScope',
          'url' => 'https://scope.silicon.network',
        ),
      ),
    ),
    'siliconSepolia' => 
    array (
      'id' => 1722641160,
      'name' => 'Silicon Sepolia zkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-sepolia.silicon.network',
            1 => 'https://silicon-testnet.nodeinfra.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SiliconSepoliaScope',
          'url' => 'https://scope-sepolia.silicon.network',
        ),
      ),
      'testnet' => true,
    ),
    'stratis' => 
    array (
      'id' => 105105,
      'name' => 'Stratis Mainnet',
      'network' => 'stratis',
      'nativeCurrency' => 
      array (
        'name' => 'Stratis',
        'symbol' => 'STRAX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.stratisevm.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Stratis Explorer',
          'url' => 'https://explorer.stratisevm.com',
        ),
      ),
    ),
    'superlumio' => 
    array (
      'id' => 8866,
      'name' => 'SuperLumio',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.lumio.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Lumio explorer',
          'url' => 'https://explorer.lumio.io',
        ),
      ),
      'testnet' => false,
    ),
    'superposition' => 
    array (
      'id' => 55244,
      'name' => 'Superposition',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.superposition.so',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Superposition Explorer',
          'url' => 'https://explorer.superposition.so',
        ),
      ),
      'testnet' => false,
    ),
    'swan' => 
    array (
      'id' => 254,
      'name' => 'Swan Chain Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.swanchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Swan Explorer',
          'url' => 'https://swanscan.io',
        ),
      ),
      'testnet' => false,
    ),
    'swanProximaTestnet' => 
    array (
      'id' => 20241133,
      'name' => 'Swan Proxima Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Swan Ether',
        'symbol' => 'sETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-proxima.swanchain.io	',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Swan Explorer',
          'url' => 'https://proxima-explorer.swanchain.io',
        ),
      ),
      'testnet' => true,
    ),
    'swanSaturnTestnet' => 
    array (
      'id' => 2024,
      'name' => 'Swan Saturn Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Swan Ether',
        'symbol' => 'sETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://saturn-rpc.swanchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Swan Explorer',
          'url' => 'https://saturn-explorer.swanchain.io',
        ),
      ),
      'testnet' => true,
    ),
    'syscoin' => 
    array (
      'id' => 57,
      'name' => 'Syscoin Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.syscoin.org',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.syscoin.org/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SyscoinExplorer',
          'url' => 'https://explorer.syscoin.org',
          'apiUrl' => 'https://explorer.syscoin.org/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 287139,
        ),
      ),
    ),
    'syscoinTestnet' => 
    array (
      'id' => 5700,
      'name' => 'Syscoin Tanenbaum Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.tanenbaum.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.tanenbaum.io/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SyscoinTestnetExplorer',
          'url' => 'https://tanenbaum.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 271288,
        ),
      ),
    ),
    'taraxa' => 
    array (
      'id' => 841,
      'name' => 'Taraxa Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Tara',
        'symbol' => 'TARA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.taraxa.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taraxa Explorer',
          'url' => 'https://explorer.mainnet.taraxa.io',
        ),
      ),
    ),
    'taiko' => 
    array (
      'id' => 167000,
      'name' => 'Taiko Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.taiko.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.mainnet.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taikoscan',
          'url' => 'https://taikoscan.io',
          'apiUrl' => 'https://api.taikoscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcb2436774C3e191c85056d248EF4260ce5f27A9D',
        ),
      ),
    ),
    'taikoHekla' => 
    array (
      'id' => 167009,
      'name' => 'Taiko Hekla L2',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.hekla.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taikoscan',
          'url' => 'https://hekla.taikoscan.network',
        ),
      ),
      'testnet' => true,
    ),
    'taikoJolnir' => 
    array (
      'id' => 167007,
      'name' => 'Taiko Jolnir (Alpha-5 Testnet)',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.jolnir.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.jolnir.taiko.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 732706,
        ),
      ),
      'testnet' => true,
    ),
    'taikoKatla' => 
    array (
      'id' => 167008,
      'name' => 'Taiko Katla (Alpha-6 Testnet)',
      'network' => 'tko-katla',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.katla.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.katla.taiko.xyz',
        ),
      ),
    ),
    'taikoTestnetSepolia' => 
    array (
      'id' => 167005,
      'name' => 'Taiko (Alpha-3 Testnet)',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.test.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.test.taiko.xyz',
        ),
      ),
    ),
    'taraxaTestnet' => 
    array (
      'id' => 842,
      'name' => 'Taraxa Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Tara',
        'symbol' => 'TARA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.taraxa.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taraxa Explorer',
          'url' => 'https://explorer.testnet.taraxa.io',
        ),
      ),
      'testnet' => true,
    ),
    'telcoinTestnet' => 
    array (
      'id' => 2017,
      'name' => 'Telcoin Adiri Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Telcoin',
        'symbol' => 'TEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.telcoin.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'telscan',
          'url' => 'https://telscan.io',
        ),
      ),
      'testnet' => true,
    ),
    'telos' => 
    array (
      'id' => 40,
      'name' => 'Telos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Telos',
        'symbol' => 'TLOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.telos.net/evm',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Teloscan',
          'url' => 'https://www.teloscan.io/',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 246530709,
        ),
      ),
    ),
    'telosTestnet' => 
    array (
      'id' => 41,
      'name' => 'Telos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Telos',
        'symbol' => 'TLOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.telos.net/evm',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Teloscan (testnet)',
          'url' => 'https://testnet.teloscan.io/',
        ),
      ),
      'testnet' => true,
    ),
    'tenet' => 
    array (
      'id' => 1559,
      'name' => 'Tenet',
      'network' => 'tenet-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'TENET',
        'symbol' => 'TENET',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.tenet.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'TenetScan Mainnet',
          'url' => 'https://tenetscan.io',
          'apiUrl' => 'https://tenetscan.io/api',
        ),
      ),
      'testnet' => false,
    ),
    'thaiChain' => 
    array (
      'id' => 7,
      'name' => 'ThaiChain',
      'nativeCurrency' => 
      array (
        'name' => 'TCH',
        'symbol' => 'TCH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.thaichain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp.thaichain.org',
          'apiUrl' => 'https://exp.thaichain.org/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0DaD6130e832c21719C5CE3bae93454E16A84826',
          'blockCreated' => 4806386,
        ),
      ),
      'testnet' => false,
    ),
    'thunderTestnet' => 
    array (
      'id' => 997,
      'name' => '5ireChain Thunder Testnet',
      'nativeCurrency' => 
      array (
        'name' => '5ire Token',
        'symbol' => '5IRE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.5ire.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => '5ireChain Explorer',
          'url' => 'https://explorer.5ire.network',
        ),
      ),
      'testnet' => true,
    ),
    'tron' => 
    array (
      'id' => 728126428,
      'name' => 'Tron',
      'nativeCurrency' => 
      array (
        'name' => 'TRON',
        'symbol' => 'TRX',
        'decimals' => 6,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.trongrid.io/jsonrpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Tronscan',
          'url' => 'https://tronscan.org',
          'apiUrl' => 'https://apilist.tronscanapi.com/api',
        ),
      ),
    ),
    'unichainSepolia' => 
    array (
      'id' => 1301,
      'name' => 'Unichain Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.unichain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Uniscan',
          'url' => 'https://sepolia.uniscan.xyz',
          'apiUrl' => 'https://api-sepolia.uniscan.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 0,
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    'unique' => 
    array (
      'id' => 8880,
      'name' => 'Unique Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'UNQ',
        'symbol' => 'UNQ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.unique.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Unique Subscan',
          'url' => 'https://unique.subscan.io/',
        ),
      ),
    ),
    'uniqueQuartz' => 
    array (
      'id' => 8881,
      'name' => 'Quartz Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'QTZ',
        'symbol' => 'QTZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-quartz.unique.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Quartz Subscan',
          'url' => 'https://quartz.subscan.io/',
        ),
      ),
    ),
    'uniqueOpal' => 
    array (
      'id' => 8882,
      'name' => 'Opal Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OPL',
        'symbol' => 'OPL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-opal.unique.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Opal Subscan',
          'url' => 'https://opal.subscan.io/',
        ),
      ),
      'testnet' => true,
    ),
    'unreal' => 
    array (
      'id' => 18233,
      'name' => 'Unreal',
      'nativeCurrency' => 
      array (
        'name' => 'reETH',
        'decimals' => 18,
        'symbol' => 'reETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.unreal-orbit.gelato.digital',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Unreal Explorer',
          'url' => 'https://unreal.blockscout.com',
          'apiUrl' => 'https://unreal.blockscout.com/api/v2',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x8b6B0e60D8CD84898Ea8b981065A12F876eA5677',
          'blockCreated' => 1745,
        ),
      ),
    ),
    'vechain' => 
    array (
      'id' => 100009,
      'name' => 'Vechain',
      'nativeCurrency' => 
      array (
        'name' => 'VeChain',
        'symbol' => 'VET',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.vechain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Vechain Explorer',
          'url' => 'https://explore.vechain.org',
        ),
        'vechainStats' => 
        array (
          'name' => 'Vechain Stats',
          'url' => 'https://vechainstats.com',
        ),
      ),
    ),
    'viction' => 
    array (
      'id' => 88,
      'name' => 'Viction',
      'nativeCurrency' => 
      array (
        'name' => 'Viction',
        'symbol' => 'VIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.viction.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'VIC Scan',
          'url' => 'https://vicscan.xyz',
        ),
      ),
      'testnet' => false,
    ),
    'victionTestnet' => 
    array (
      'id' => 89,
      'name' => 'Viction Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Viction',
        'symbol' => 'VIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.viction.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'VIC Scan',
          'url' => 'https://testnet.vicscan.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 12170179,
        ),
      ),
      'testnet' => true,
    ),
    'vision' => 
    array (
      'id' => 888888,
      'name' => 'Vision',
      'nativeCurrency' => 
      array (
        'name' => 'VISION',
        'symbol' => 'VS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://infragrid.v.network/ethereum/compatible',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Vision Scan',
          'url' => 'https://visionscan.org',
        ),
      ),
      'testnet' => false,
    ),
    'visionTestnet' => 
    array (
      'id' => 666666,
      'name' => 'Vision Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'VISION',
        'symbol' => 'VS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://vpioneer.infragrid.v.network/ethereum/compatible',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Vision Scan',
          'url' => 'https://visionscan.org/?chain=vpioneer',
        ),
      ),
      'testnet' => true,
    ),
    'wanchain' => 
    array (
      'id' => 888,
      'name' => 'Wanchain',
      'nativeCurrency' => 
      array (
        'name' => 'WANCHAIN',
        'symbol' => 'WAN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://gwan-ssl.wandevs.org:56891',
            1 => 'https://gwan2-ssl.wandevs.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'WanScan',
          'url' => 'https://wanscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcDF6A1566e78EB4594c86Fe73Fcdc82429e97fbB',
          'blockCreated' => 25312390,
        ),
      ),
    ),
    'wanchainTestnet' => 
    array (
      'id' => 999,
      'name' => 'Wanchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'WANCHAIN',
        'symbol' => 'WANt',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://gwan-ssl.wandevs.org:46891',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'WanScanTest',
          'url' => 'https://wanscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x11c89bF4496c39FB80535Ffb4c92715839CC5324',
          'blockCreated' => 24743448,
        ),
      ),
      'testnet' => true,
    ),
    'weaveVMAlphanet' => 
    array (
      'id' => 9496,
      'name' => 'WeaveVM Alphanet',
      'nativeCurrency' => 
      array (
        'name' => 'Testnet WeaveVM',
        'symbol' => 'tWVM',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.wvm.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'WeaveVM Alphanet Explorer',
          'url' => 'https://explorer.wvm.dev',
        ),
      ),
      'testnet' => true,
    ),
    'wemix' => 
    array (
      'id' => 1111,
      'name' => 'WEMIX',
      'network' => 'wemix-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'WEMIX',
        'symbol' => 'WEMIX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.wemix.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'wemixExplorer',
          'url' => 'https://explorer.wemix.com',
        ),
      ),
    ),
    'wemixTestnet' => 
    array (
      'id' => 1112,
      'name' => 'WEMIX Testnet',
      'network' => 'wemix-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'WEMIX',
        'symbol' => 'tWEMIX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.test.wemix.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'wemixExplorer',
          'url' => 'https://testnet.wemixscan.com',
          'apiUrl' => 'https://testnet.wemixscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    'worldchain' => 
    array (
      'id' => 480,
      'name' => 'World Chain',
      'network' => 'worldchain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://worldchain-mainnet.g.alchemy.com/public',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'World Chain Explorer',
          'url' => 'https://worldchain-mainnet.explorer.alchemy.com',
        ),
      ),
      'testnet' => false,
    ),
    'worldchainSepolia' => 
    array (
      'id' => 4801,
      'name' => 'World Chain Sepolia',
      'network' => 'worldchain-sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://worldchain-sepolia.g.alchemy.com/public',
          ),
        ),
        'public' => 
        array (
          'http' => 
          array (
            0 => 'https://worldchain-sepolia.g.alchemy.com/public',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'World Chain Sepolia Explorer',
          'url' => 'https://worldchain-sepolia.explorer.alchemy.com',
        ),
      ),
      'testnet' => true,
    ),
    'xLayerTestnet' => 
    array (
      'id' => 195,
      'name' => 'X1 Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKB',
        'symbol' => 'OKB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xlayertestrpc.okx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OKLink',
          'url' => 'https://www.oklink.com/xlayer-test',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 624344,
        ),
      ),
      'testnet' => true,
    ),
    'x1Testnet' => 
    array (
      'id' => 195,
      'name' => 'X1 Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKB',
        'symbol' => 'OKB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xlayertestrpc.okx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OKLink',
          'url' => 'https://www.oklink.com/xlayer-test',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 624344,
        ),
      ),
      'testnet' => true,
    ),
    'xLayer' => 
    array (
      'id' => 196,
      'name' => 'X Layer Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKB',
        'symbol' => 'OKB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.xlayer.tech',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OKLink',
          'url' => 'https://www.oklink.com/xlayer',
          'apiUrl' => 'https://www.oklink.com/api/v5/explorer/xlayer/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 47416,
        ),
      ),
    ),
    'xai' => 
    array (
      'id' => 660279,
      'name' => 'Xai Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Xai',
        'symbol' => 'XAI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xai-chain.net/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.xai-chain.net',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 222549,
        ),
      ),
      'testnet' => false,
    ),
    'xaiTestnet' => 
    array (
      'id' => 37714555429,
      'name' => 'Xai Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sXai',
        'symbol' => 'sXAI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-v2.xai-chain.net/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet-explorer-v2.xai-chain.net',
        ),
      ),
      'testnet' => true,
    ),
    'xdc' => 
    array (
      'id' => 50,
      'name' => 'XinFin Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'XDC',
        'symbol' => 'XDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.xinfin.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blocksscan',
          'url' => 'https://xdc.blocksscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 71542788,
        ),
      ),
    ),
    'xdcTestnet' => 
    array (
      'id' => 51,
      'name' => 'Apothem Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'TXDC',
        'symbol' => 'TXDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://erpc.apothem.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blocksscan',
          'url' => 'https://apothem.blocksscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 59765389,
        ),
      ),
    ),
    'xrSepolia' => 
    array (
      'id' => 2730,
      'name' => 'XR Sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'tXR',
        'symbol' => 'tXR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xr-sepolia-testnet.rpc.caldera.xyz/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://xr-sepolia-testnet.explorer.caldera.xyz',
        ),
      ),
      'testnet' => true,
    ),
    'yooldoVerse' => 
    array (
      'id' => 50005,
      'name' => 'Yooldo Verse',
      'nativeCurrency' => 
      array (
        'name' => 'OAS',
        'symbol' => 'OAS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.yooldo-verse.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Yooldo Verse Explorer',
          'url' => 'https://explorer.yooldo-verse.xyz',
        ),
      ),
    ),
    'yooldoVerseTestnet' => 
    array (
      'id' => 50006,
      'name' => 'Yooldo Verse Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'OAS',
        'symbol' => 'OAS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.yooldo-verse.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Yooldo Verse Testnet Explorer',
          'url' => 'https://explorer.testnet.yooldo-verse.xyz',
        ),
      ),
      'testnet' => true,
    ),
    'zenchainTestnet' => 
    array (
      'id' => 8408,
      'name' => 'Zenchain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ZCX',
        'symbol' => 'ZCX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zenchain-testnet.api.onfinality.io/public',
          ),
          'webSocket' => 
          array (
            0 => 'wss://zenchain-testnet.api.onfinality.io/public-ws',
          ),
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 230019,
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zentrace',
          'url' => 'https://zentrace.io',
        ),
      ),
      'testnet' => true,
    ),
    'zetachain' => 
    array (
      'id' => 7000,
      'name' => 'ZetaChain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zeta',
        'symbol' => 'ZETA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zetachain-evm.blockpi.network/v1/rpc/public',
          ),
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1632781,
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ZetaScan',
          'url' => 'https://explorer.zetachain.com',
        ),
      ),
      'testnet' => false,
    ),
    'zetachainAthensTestnet' => 
    array (
      'id' => 7001,
      'name' => 'ZetaChain Athens Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zeta',
        'symbol' => 'aZETA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zetachain-athens-evm.blockpi.network/v1/rpc/public',
          ),
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 2715217,
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ZetaScan',
          'url' => 'https://athens.explorer.zetachain.com',
        ),
      ),
      'testnet' => true,
    ),
    'zhejiang' => 
    array (
      'id' => 1337803,
      'name' => 'Zhejiang',
      'nativeCurrency' => 
      array (
        'name' => 'Zhejiang Ether',
        'symbol' => 'ZhejETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zhejiang.ethpandaops.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Beaconchain',
          'url' => 'https://zhejiang.beaconcha.in',
        ),
      ),
      'testnet' => true,
    ),
    'zilliqa' => 
    array (
      'id' => 32769,
      'name' => 'Zilliqa',
      'network' => 'zilliqa',
      'nativeCurrency' => 
      array (
        'name' => 'Zilliqa',
        'symbol' => 'ZIL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.zilliqa.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ethernal',
          'url' => 'https://evmx.zilliqa.com',
        ),
      ),
      'testnet' => false,
    ),
    'zilliqaTestnet' => 
    array (
      'id' => 33101,
      'name' => 'Zilliqa Testnet',
      'network' => 'zilliqa-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Zilliqa',
        'symbol' => 'ZIL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dev-api.zilliqa.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ethernal',
          'url' => 'https://evmx.testnet.zilliqa.com',
        ),
      ),
      'testnet' => true,
    ),
    'zkFair' => 
    array (
      'id' => 42766,
      'name' => 'ZKFair Mainnet',
      'network' => 'zkfair-mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'USD Coin',
        'symbol' => 'USDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zkfair.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkFair Explorer',
          'url' => 'https://scan.zkfair.io',
          'apiUrl' => 'https://scan.zkfair.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 6090959,
        ),
      ),
      'testnet' => false,
    ),
    'zkFairTestnet' => 
    array (
      'id' => 43851,
      'name' => 'ZKFair Testnet',
      'network' => 'zkfair-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'USD Coin',
        'symbol' => 'USDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.zkfair.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkFair Explorer',
          'url' => 'https://testnet-scan.zkfair.io',
        ),
      ),
      'testnet' => true,
    ),
    'zkLinkNova' => 
    array (
      'id' => 810180,
      'name' => 'zkLink Nova',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zklink.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkLink Nova Block Explorer',
          'url' => 'https://explorer.zklink.io',
        ),
      ),
    ),
    'zkLinkNovaSepoliaTestnet' => 
    array (
      'id' => 810181,
      'name' => 'zkLink Nova Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.rpc.zklink.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkLink Nova Block Explorer',
          'url' => 'https://sepolia.explorer.zklink.io',
        ),
      ),
    ),
    'zkSync' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 324,
      'name' => 'ZKsync Era',
      'network' => 'zksync-era',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.era.zksync.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.era.zksync.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://era.zksync.network/',
          'apiUrl' => 'https://api-era.zksync.network/api',
        ),
        'native' => 
        array (
          'name' => 'ZKsync Explorer',
          'url' => 'https://explorer.zksync.io/',
          'apiUrl' => 'https://block-explorer-api.mainnet.zksync.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 45659388,
        ),
      ),
    ),
    'zksync' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 324,
      'name' => 'ZKsync Era',
      'network' => 'zksync-era',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.era.zksync.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.era.zksync.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://era.zksync.network/',
          'apiUrl' => 'https://api-era.zksync.network/api',
        ),
        'native' => 
        array (
          'name' => 'ZKsync Explorer',
          'url' => 'https://explorer.zksync.io/',
          'apiUrl' => 'https://block-explorer-api.mainnet.zksync.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 45659388,
        ),
      ),
    ),
    'zkSyncInMemoryNode' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 260,
      'name' => 'ZKsync InMemory Node',
      'network' => 'zksync-in-memory-node',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://localhost:8011',
          ),
        ),
      ),
      'testnet' => true,
    ),
    'zksyncInMemoryNode' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 260,
      'name' => 'ZKsync InMemory Node',
      'network' => 'zksync-in-memory-node',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://localhost:8011',
          ),
        ),
      ),
      'testnet' => true,
    ),
    'zkSyncLocalNode' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 270,
      'name' => 'ZKsync CLI Local Node',
      'network' => 'zksync-cli-local-node',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://localhost:3050',
          ),
        ),
      ),
      'testnet' => true,
    ),
    'zksyncLocalNode' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 270,
      'name' => 'ZKsync CLI Local Node',
      'network' => 'zksync-cli-local-node',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://localhost:3050',
          ),
        ),
      ),
      'testnet' => true,
    ),
    'zkSyncSepoliaTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 300,
      'name' => 'ZKsync Sepolia Testnet',
      'network' => 'zksync-sepolia-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.era.zksync.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sepolia.era.zksync.dev/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia-era.zksync.network/',
          'apiUrl' => 'https://api-sepolia-era.zksync.network/api',
        ),
        'native' => 
        array (
          'name' => 'ZKsync Explorer',
          'url' => 'https://sepolia.explorer.zksync.io/',
          'blockExplorerApi' => 'https://block-explorer-api.sepolia.zksync.dev/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 3855712,
        ),
      ),
      'testnet' => true,
    ),
    'zksyncSepoliaTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 300,
      'name' => 'ZKsync Sepolia Testnet',
      'network' => 'zksync-sepolia-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.era.zksync.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sepolia.era.zksync.dev/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia-era.zksync.network/',
          'apiUrl' => 'https://api-sepolia-era.zksync.network/api',
        ),
        'native' => 
        array (
          'name' => 'ZKsync Explorer',
          'url' => 'https://sepolia.explorer.zksync.io/',
          'blockExplorerApi' => 'https://block-explorer-api.sepolia.zksync.dev/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 3855712,
        ),
      ),
      'testnet' => true,
    ),
    'zora' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x9E6204F750cD866b299594e2aC9eA824E2e5f95c',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 5882,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x1a0ad011913A150f69f6A19DF447A0CfD9551054',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x3e2Ea9B92B7E48A52296fD261dc26fd995284631',
          ),
        ),
      ),
      'id' => 7777777,
      'name' => 'Zora',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zora.energy',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.zora.energy',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.zora.energy',
          'apiUrl' => 'https://explorer.zora.energy/api',
        ),
      ),
      'sourceId' => 1,
    ),
    'zoraSepolia' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x2615B481Bd3E5A1C0C7Ca3Da1bdc663E8615Ade9',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 83160,
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xeffE2C6cA9Ab797D418f0D91eA60807713f3536f',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0x5376f1D543dcbB5BD416c56C189e4cB7399fCcCB',
          ),
        ),
      ),
      'id' => 999999999,
      'name' => 'Zora Sepolia',
      'network' => 'zora-sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zora Sepolia',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.rpc.zora.energy',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sepolia.rpc.zora.energy',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zora Sepolia Explorer',
          'url' => 'https://sepolia.explorer.zora.energy/',
          'apiUrl' => 'https://sepolia.explorer.zora.energy/api',
        ),
      ),
      'sourceId' => 11155111,
      'testnet' => true,
    ),
    'zoraTestnet' => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 189123,
        ),
        'portal' => 
        array (
          5 => 
          array (
            'address' => '0xDb9F51790365e7dc196e7D072728df39Be958ACe',
          ),
        ),
      ),
      'id' => 999,
      'name' => 'Zora Goerli Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zora Goerli',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.rpc.zora.energy',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.rpc.zora.energy',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://testnet.explorer.zora.energy',
          'apiUrl' => 'https://testnet.explorer.zora.energy/api',
        ),
      ),
      'sourceId' => 5,
      'testnet' => true,
    ),
    'zircuit' => 
    array (
      'id' => 48900,
      'name' => 'Zircuit Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zircuit1-mainnet.p2pify.com',
            1 => 'https://zircuit1-mainnet.liquify.com',
            2 => 'https://zircuit-mainnet.drpc.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zircuit Explorer',
          'url' => 'https://explorer.zircuit.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
        ),
      ),
      'testnet' => false,
    ),
    'zircuitTestnet' => 
    array (
      'id' => 48899,
      'name' => 'Zircuit Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'ETH',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zircuit1-testnet.p2pify.com',
            1 => 'https://zircuit1-testnet.liquify.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zircuit Testnet Explorer',
          'url' => 'https://explorer.testnet.zircuit.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 6040287,
        ),
      ),
      'testnet' => true,
    ),
    'scroll' => 
    array (
      'id' => 534352,
      'name' => 'Scroll',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.scroll.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://wss-rpc.scroll.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Scrollscan',
          'url' => 'https://scrollscan.com',
          'apiUrl' => 'https://api.scrollscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14,
        ),
      ),
      'testnet' => false,
    ),
  ),
  'byId' => 
  array (
    1 => 
    array (
      'id' => 1,
      'name' => 'Ethereum',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://cloudflare-eth.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://etherscan.io',
          'apiUrl' => 'https://api.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xce01f8eee7E479C928F8919abD53E553a36CeF67',
          'blockCreated' => 19258213,
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14353601,
        ),
      ),
    ),
    5 => 
    array (
      'id' => 5,
      'name' => 'Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/eth_goerli',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli.etherscan.io',
          'apiUrl' => 'https://api-goerli.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xfc4AC75C46C914aF5892d6d3eFFcebD7917293F1',
          'blockCreated' => 10339206,
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 6507670,
        ),
      ),
      'testnet' => true,
    ),
    7 => 
    array (
      'id' => 7,
      'name' => 'ThaiChain',
      'nativeCurrency' => 
      array (
        'name' => 'TCH',
        'symbol' => 'TCH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.thaichain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp.thaichain.org',
          'apiUrl' => 'https://exp.thaichain.org/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0DaD6130e832c21719C5CE3bae93454E16A84826',
          'blockCreated' => 4806386,
        ),
      ),
      'testnet' => false,
    ),
    10 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          1 => 
          array (
            'address' => '0xe5965Ab5962eDc7477C8520243A95517CD252fA9',
          ),
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xdfe97868233d1aa22e815a266982f2cf17685a27',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 4286263,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xbEb5Fc579115071764c7423A4f12eDde41f106Ed',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x99C9fc46f92E8a1c0deC1b1747d010903E884bE1',
          ),
        ),
      ),
      'id' => 10,
      'name' => 'OP Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.optimism.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Optimism Explorer',
          'url' => 'https://optimistic.etherscan.io',
          'apiUrl' => 'https://api-optimistic.etherscan.io/api',
        ),
      ),
      'sourceId' => 1,
    ),
    14 => 
    array (
      'id' => 14,
      'name' => 'Flare Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flare',
        'symbol' => 'FLR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://flare-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Flare Explorer',
          'url' => 'https://flare-explorer.flare.network',
          'apiUrl' => 'https://flare-explorer.flare.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3002461,
        ),
      ),
    ),
    16 => 
    array (
      'id' => 16,
      'name' => 'Songbird Testnet Coston',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Coston Flare',
        'symbol' => 'CFLR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://coston-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Coston Explorer',
          'url' => 'https://coston-explorer.flare.network',
          'apiUrl' => 'https://coston-explorer.flare.network/api',
        ),
      ),
      'testnet' => true,
    ),
    19 => 
    array (
      'id' => 19,
      'name' => 'Songbird Canary-Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Songbird',
        'symbol' => 'SGB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://songbird-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Songbird Explorer',
          'url' => 'https://songbird-explorer.flare.network',
          'apiUrl' => 'https://songbird-explorer.flare.network/api',
        ),
      ),
    ),
    20 => 
    array (
      'id' => 20,
      'name' => 'Elastos Smart Chain',
      'nativeCurrency' => 
      array (
        'name' => 'ELA',
        'symbol' => 'ELA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api2.elastos.io/eth',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Elastos Explorer',
          'url' => 'https://esc.elastos.io',
        ),
      ),
      'testnet' => false,
    ),
    21 => 
    array (
      'id' => 21,
      'name' => 'Elastos Smart Chain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'tELA',
        'symbol' => 'tELA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api-testnet.elastos.io/eth',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Elastos Explorer',
          'url' => 'https://esc-testnet.elastos.io',
        ),
      ),
      'testnet' => true,
    ),
    25 => 
    array (
      'id' => 25,
      'name' => 'Cronos Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Cronos',
        'symbol' => 'CRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos Explorer',
          'url' => 'https://explorer.cronos.org',
          'apiUrl' => 'https://explorer-api.cronos.org/mainnet/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1963112,
        ),
      ),
    ),
    30 => 
    array (
      'id' => 30,
      'name' => 'Rootstock Mainnet',
      'network' => 'rootstock',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Rootstock Bitcoin',
        'symbol' => 'RBTC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-node.rsk.co',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSK Explorer',
          'url' => 'https://explorer.rsk.co',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 4249540,
        ),
      ),
    ),
    31 => 
    array (
      'id' => 31,
      'name' => 'Rootstock Testnet',
      'network' => 'rootstock',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Rootstock Bitcoin',
        'symbol' => 'tRBTC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-node.testnet.rsk.co',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSK Explorer',
          'url' => 'https://explorer.testnet.rootstock.io',
        ),
      ),
      'testnet' => true,
    ),
    40 => 
    array (
      'id' => 40,
      'name' => 'Telos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Telos',
        'symbol' => 'TLOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.telos.net/evm',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Teloscan',
          'url' => 'https://www.teloscan.io/',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 246530709,
        ),
      ),
    ),
    41 => 
    array (
      'id' => 41,
      'name' => 'Telos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Telos',
        'symbol' => 'TLOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.telos.net/evm',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Teloscan (testnet)',
          'url' => 'https://testnet.teloscan.io/',
        ),
      ),
      'testnet' => true,
    ),
    42 => 
    array (
      'id' => 42,
      'network' => 'lukso',
      'name' => 'LUKSO',
      'nativeCurrency' => 
      array (
        'name' => 'LUKSO',
        'symbol' => 'LYX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.lukso.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws-rpc.mainnet.lukso.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LUKSO Mainnet Explorer',
          'url' => 'https://explorer.execution.mainnet.lukso.network',
          'apiUrl' => 'https://api.explorer.execution.mainnet.lukso.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 468183,
        ),
      ),
    ),
    44 => 
    array (
      'id' => 44,
      'name' => 'Crab Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Crab Network Native Token',
        'symbol' => 'CRAB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://crab-rpc.darwinia.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://crab-rpc.darwinia.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://crab-scan.darwinia.network',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 3032593,
        ),
      ),
    ),
    46 => 
    array (
      'id' => 46,
      'name' => 'Darwinia Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'RING',
        'symbol' => 'RING',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.darwinia.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.darwinia.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.darwinia.network',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 69420,
        ),
      ),
    ),
    50 => 
    array (
      'id' => 50,
      'name' => 'XinFin Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'XDC',
        'symbol' => 'XDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.xinfin.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blocksscan',
          'url' => 'https://xdc.blocksscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 71542788,
        ),
      ),
    ),
    51 => 
    array (
      'id' => 51,
      'name' => 'Apothem Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'TXDC',
        'symbol' => 'TXDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://erpc.apothem.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blocksscan',
          'url' => 'https://apothem.blocksscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 59765389,
        ),
      ),
    ),
    56 => 
    array (
      'id' => 56,
      'name' => 'BNB Smart Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BNB',
        'symbol' => 'BNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/bsc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BscScan',
          'url' => 'https://bscscan.com',
          'apiUrl' => 'https://api.bscscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 15921452,
        ),
      ),
    ),
    57 => 
    array (
      'id' => 57,
      'name' => 'Syscoin Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.syscoin.org',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.syscoin.org/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SyscoinExplorer',
          'url' => 'https://explorer.syscoin.org',
          'apiUrl' => 'https://explorer.syscoin.org/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 287139,
        ),
      ),
    ),
    60 => 
    array (
      'id' => 60,
      'name' => 'GoChain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'GO',
        'symbol' => 'GO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gochain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'GoChain Explorer',
          'url' => 'https://explorer.gochain.io',
        ),
      ),
      'testnet' => false,
    ),
    61 => 
    array (
      'id' => 61,
      'name' => 'Ethereum Classic',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETC',
        'symbol' => 'ETC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://etc.rivet.link',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.com/etc/mainnet',
        ),
      ),
    ),
    66 => 
    array (
      'id' => 66,
      'name' => 'OKC',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKT',
        'symbol' => 'OKT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://exchainrpc.okex.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'oklink',
          'url' => 'https://www.oklink.com/okc',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 10364792,
        ),
      ),
    ),
    71 => 
    array (
      'id' => 71,
      'name' => 'Conflux eSpace Testnet',
      'network' => 'cfx-espace-testnet',
      'testnet' => true,
      'nativeCurrency' => 
      array (
        'name' => 'Conflux',
        'symbol' => 'CFX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evmtestnet.confluxrpc.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evmtestnet.confluxrpc.com/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ConfluxScan',
          'url' => 'https://evmtestnet.confluxscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xEFf0078910f638cd81996cc117bccD3eDf2B072F',
          'blockCreated' => 117499050,
        ),
      ),
    ),
    82 => 
    array (
      'id' => 82,
      'name' => 'Meter',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MTR',
        'symbol' => 'MTR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.meter.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MeterScan',
          'url' => 'https://scan.meter.io',
        ),
      ),
    ),
    83 => 
    array (
      'id' => 83,
      'name' => 'Meter Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MTR',
        'symbol' => 'MTR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpctest.meter.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MeterTestnetScan',
          'url' => 'https://scan-warringstakes.meter.io',
        ),
      ),
    ),
    88 => 
    array (
      'id' => 88,
      'name' => 'Viction',
      'nativeCurrency' => 
      array (
        'name' => 'Viction',
        'symbol' => 'VIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.viction.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'VIC Scan',
          'url' => 'https://vicscan.xyz',
        ),
      ),
      'testnet' => false,
    ),
    89 => 
    array (
      'id' => 89,
      'name' => 'Viction Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Viction',
        'symbol' => 'VIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.viction.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'VIC Scan',
          'url' => 'https://testnet.vicscan.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 12170179,
        ),
      ),
      'testnet' => true,
    ),
    96 => 
    array (
      'id' => 96,
      'name' => 'Bitkub',
      'nativeCurrency' => 
      array (
        'name' => 'Bitkub',
        'symbol' => 'KUB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bitkubchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitkub Chain Mainnet Explorer',
          'url' => 'https://www.bkcscan.com',
          'apiUrl' => 'https://www.bkcscan.com/api',
        ),
      ),
    ),
    97 => 
    array (
      'id' => 97,
      'name' => 'Binance Smart Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BNB',
        'symbol' => 'tBNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://data-seed-prebsc-1-s1.bnbchain.org:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BscScan',
          'url' => 'https://testnet.bscscan.com',
          'apiUrl' => 'https://api-testnet.bscscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 17422483,
        ),
      ),
      'testnet' => true,
    ),
    100 => 
    array (
      'id' => 100,
      'name' => 'Gnosis',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Gnosis',
        'symbol' => 'xDAI',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gnosischain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.gnosischain.com/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Gnosisscan',
          'url' => 'https://gnosisscan.io',
          'apiUrl' => 'https://api.gnosisscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 21022491,
        ),
      ),
    ),
    109 => 
    array (
      'id' => 109,
      'name' => 'Shibarium',
      'network' => 'shibarium',
      'nativeCurrency' => 
      array (
        'name' => 'Bone',
        'symbol' => 'BONE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.shibrpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://shibariumscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x864Bf681ADD6052395188A89101A1B37d3B4C961',
          'blockCreated' => 265900,
        ),
      ),
    ),
    114 => 
    array (
      'id' => 114,
      'name' => 'Flare Testnet Coston2',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Coston2 Flare',
        'symbol' => 'C2FLR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://coston2-api.flare.network/ext/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Coston2 Explorer',
          'url' => 'https://coston2-explorer.flare.network',
          'apiUrl' => 'https://coston2-explorer.flare.network/api',
        ),
      ),
      'testnet' => true,
    ),
    122 => 
    array (
      'id' => 122,
      'name' => 'Fuse',
      'nativeCurrency' => 
      array (
        'name' => 'Fuse',
        'symbol' => 'FUSE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.fuse.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Fuse Explorer',
          'url' => 'https://explorer.fuse.io',
          'apiUrl' => 'https://explorer.fuse.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 16146628,
        ),
      ),
    ),
    123 => 
    array (
      'id' => 123,
      'name' => 'Fuse Sparknet',
      'nativeCurrency' => 
      array (
        'name' => 'Spark',
        'symbol' => 'SPARK',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.fusespark.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Sparkent Explorer',
          'url' => 'https://explorer.fusespark.io',
          'apiUrl' => 'https://explorer.fusespark.io/api',
        ),
      ),
    ),
    133 => 
    array (
      'id' => 133,
      'name' => 'HashKey Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'HashKey EcoPoints',
        'symbol' => 'HSK',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://hashkeychain-testnet.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HashKey Chain Explorer',
          'url' => 'https://hashkeychain-testnet-explorer.alt.technology',
        ),
      ),
    ),
    137 => 
    array (
      'id' => 137,
      'name' => 'Polygon',
      'nativeCurrency' => 
      array (
        'name' => 'POL',
        'symbol' => 'POL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://polygon-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://polygonscan.com',
          'apiUrl' => 'https://api.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 25770160,
        ),
      ),
    ),
    148 => 
    array (
      'id' => 148,
      'name' => 'Shimmer',
      'network' => 'shimmer',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Shimmer',
        'symbol' => 'SMR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.shimmer.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Shimmer Network Explorer',
          'url' => 'https://explorer.evm.shimmer.network',
          'apiUrl' => 'https://explorer.evm.shimmer.network/api',
        ),
      ),
    ),
    153 => 
    array (
      'id' => 153,
      'name' => 'Redbelly Network Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Redbelly Native Coin',
        'symbol' => 'RBNT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://governors.testnet.redbelly.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ethernal',
          'url' => 'https://explorer.testnet.redbelly.network',
          'apiUrl' => 'https://ethernal.fly.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    157 => 
    array (
      'id' => 157,
      'name' => 'Puppynet Shibarium',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Bone',
        'symbol' => 'BONE',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://puppynet.shibrpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://puppyscan.shib.io',
          'apiUrl' => 'https://puppyscan.shib.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xA4029b74FBA366c926eDFA7Dd10B21C621170a4c',
          'blockCreated' => 3035769,
        ),
      ),
      'testnet' => true,
    ),
    169 => 
    array (
      'id' => 169,
      'name' => 'Manta Pacific Mainnet',
      'network' => 'manta',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://pacific-rpc.manta.network/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Manta Explorer',
          'url' => 'https://pacific-explorer.manta.network',
          'apiUrl' => 'https://pacific-explorer.manta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 332890,
        ),
      ),
    ),
    185 => 
    array (
      'id' => 185,
      'name' => 'Mint Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mintchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mintchain explorer',
          'url' => 'https://explorer.mintchain.io',
        ),
      ),
      'testnet' => false,
    ),
    195 => 
    array (
      'id' => 195,
      'name' => 'X1 Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKB',
        'symbol' => 'OKB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xlayertestrpc.okx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OKLink',
          'url' => 'https://www.oklink.com/xlayer-test',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 624344,
        ),
      ),
      'testnet' => true,
    ),
    196 => 
    array (
      'id' => 196,
      'name' => 'X Layer Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OKB',
        'symbol' => 'OKB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.xlayer.tech',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OKLink',
          'url' => 'https://www.oklink.com/xlayer',
          'apiUrl' => 'https://www.oklink.com/api/v5/explorer/xlayer/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 47416,
        ),
      ),
    ),
    199 => 
    array (
      'id' => 199,
      'name' => 'BitTorrent',
      'network' => 'bittorrent-chain-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BitTorrent',
        'symbol' => 'BTT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bittorrentchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bttcscan',
          'url' => 'https://bttcscan.com',
          'apiUrl' => 'https://api.bttcscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 31078552,
        ),
      ),
    ),
    202 => 
    array (
      'id' => 202,
      'name' => 'Edgeless Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Edgeless Wrapped ETH',
        'symbol' => 'EwETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://edgeless-testnet.rpc.caldera.xyz/http',
          ),
          'webSocket' => 
          array (
            0 => 'wss://edgeless-testnet.rpc.caldera.xyz/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgeless Testnet Explorer',
          'url' => 'https://testnet.explorer.edgeless.network',
        ),
      ),
    ),
    204 => 
    array (
      'id' => 204,
      'name' => 'opBNB',
      'nativeCurrency' => 
      array (
        'name' => 'BNB',
        'symbol' => 'BNB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://opbnb-mainnet-rpc.bnbchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'opBNB (BSCScan)',
          'url' => 'https://opbnb.bscscan.com',
          'apiUrl' => 'https://api-opbnb.bscscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 512881,
        ),
        'l2OutputOracle' => 
        array (
          56 => 
          array (
            'address' => '0x153CAB79f4767E2ff862C94aa49573294B13D169',
          ),
        ),
        'portal' => 
        array (
          56 => 
          array (
            'address' => '0x1876EA7702C0ad0C6A2ae6036DE7733edfBca519',
          ),
        ),
        'l1StandardBridge' => 
        array (
          56 => 
          array (
            'address' => '0xF05F0e4362859c3331Cb9395CBC201E3Fa6757Ea',
          ),
        ),
      ),
      'sourceId' => 56,
    ),
    223 => 
    array (
      'id' => 223,
      'name' => 'B2',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bsquared.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.bsquared.network',
        ),
      ),
    ),
    240 => 
    array (
      'id' => 240,
      'name' => 'Nexilix Smart Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Nexilix',
        'symbol' => 'NEXILIX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcurl.pos.nexilix.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'NexilixScan',
          'url' => 'https://scan.nexilix.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x58381c8e2BF9d0C2C4259cA14BdA9Afe02831244',
          'blockCreated' => 74448,
        ),
      ),
    ),
    242 => 
    array (
      'id' => 242,
      'name' => 'Plinga',
      'nativeCurrency' => 
      array (
        'name' => 'Plinga',
        'symbol' => 'PLINGA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcurl.mainnet.plgchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Plgscan',
          'url' => 'https://www.plgscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0989576160f2e7092908BB9479631b901060b6e4',
          'blockCreated' => 204489,
        ),
      ),
    ),
    248 => 
    array (
      'id' => 248,
      'name' => 'Oasys',
      'nativeCurrency' => 
      array (
        'name' => 'Oasys',
        'symbol' => 'OAS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.oasys.games',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OasysScan',
          'url' => 'https://scan.oasys.games',
          'apiUrl' => 'https://scan.oasys.games/api',
        ),
      ),
    ),
    250 => 
    array (
      'id' => 250,
      'name' => 'Fantom',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Fantom',
        'symbol' => 'FTM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/fantom',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FTMScan',
          'url' => 'https://ftmscan.com',
          'apiUrl' => 'https://api.ftmscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 33001987,
        ),
      ),
    ),
    252 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x66CC916Ed5C6C2FA97014f7D1cD141528Ae171e4',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x36cb65c1967A0Fb0EEE11569C51C2f2aA1Ca6f6D',
            'blockCreated' => 19135323,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x34C0bD5877A5Ee7099D0f5688D65F4bB9158BDE2',
            'blockCreated' => 19135323,
          ),
        ),
      ),
      'id' => 252,
      'name' => 'Fraxtal',
      'nativeCurrency' => 
      array (
        'name' => 'Frax Ether',
        'symbol' => 'frxETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.frax.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'fraxscan',
          'url' => 'https://fraxscan.com',
          'apiUrl' => 'https://api.fraxscan.com/api',
        ),
      ),
      'sourceId' => 1,
    ),
    254 => 
    array (
      'id' => 254,
      'name' => 'Swan Chain Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.swanchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Swan Explorer',
          'url' => 'https://swanscan.io',
        ),
      ),
      'testnet' => false,
    ),
    255 => 
    array (
      'id' => 255,
      'name' => 'Kroma',
      'nativeCurrency' => 
      array (
        'name' => 'ETH',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.kroma.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kroma Explorer',
          'url' => 'https://blockscout.kroma.network',
          'apiUrl' => 'https://blockscout.kroma.network/api',
        ),
      ),
      'testnet' => false,
    ),
    260 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 260,
      'name' => 'ZKsync InMemory Node',
      'network' => 'zksync-in-memory-node',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://localhost:8011',
          ),
        ),
      ),
      'testnet' => true,
    ),
    261 => 
    array (
      'id' => 261,
      'name' => 'Guru Network Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'testGURU',
        'symbol' => 'tGURU',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gurunetwork.ai/archive/261',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Guruscan',
          'url' => 'https://scan.gurunetwork.ai',
        ),
      ),
      'testnet' => true,
    ),
    270 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 270,
      'name' => 'ZKsync CLI Local Node',
      'network' => 'zksync-cli-local-node',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://localhost:3050',
          ),
        ),
      ),
      'testnet' => true,
    ),
    282 => 
    array (
      'id' => 282,
      'name' => 'Cronos zkEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Cronos zkEVM Test Coin',
        'symbol' => 'zkTCRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.zkevm.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos zkEVM Testnet Explorer',
          'url' => 'https://explorer.zkevm.cronos.org/testnet',
        ),
      ),
      'testnet' => true,
    ),
    288 => 
    array (
      'id' => 288,
      'name' => 'Boba Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.boba.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOBAScan',
          'url' => 'https://bobascan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 446859,
        ),
      ),
    ),
    291 => 
    array (
      'id' => 291,
      'name' => 'Orderly',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.orderly.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Orderly Explorer',
          'url' => 'https://explorer.orderly.network',
        ),
      ),
      'testnet' => false,
    ),
    295 => 
    array (
      'id' => 295,
      'name' => 'Hedera Mainnet',
      'network' => 'hedera-mainnet',
      'nativeCurrency' => 
      array (
        'symbol' => 'HBAR',
        'name' => 'HBAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.hashio.io/api',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hashscan',
          'url' => 'https://hashscan.io/mainnet',
        ),
      ),
      'testnet' => false,
    ),
    296 => 
    array (
      'id' => 296,
      'name' => 'Hedera Testnet',
      'network' => 'hedera-testnet',
      'nativeCurrency' => 
      array (
        'symbol' => 'HBAR',
        'name' => 'HBAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.hashio.io/api',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hashscan',
          'url' => 'https://hashscan.io/testnet',
        ),
      ),
      'testnet' => true,
    ),
    297 => 
    array (
      'id' => 297,
      'name' => 'Hedera Previewnet',
      'network' => 'hedera-previewnet',
      'nativeCurrency' => 
      array (
        'symbol' => 'HBAR',
        'name' => 'HBAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://previewnet.hashio.io/api',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hashscan',
          'url' => 'https://hashscan.io/previewnet',
        ),
      ),
      'testnet' => true,
    ),
    300 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 300,
      'name' => 'ZKsync Sepolia Testnet',
      'network' => 'zksync-sepolia-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.era.zksync.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sepolia.era.zksync.dev/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia-era.zksync.network/',
          'apiUrl' => 'https://api-sepolia-era.zksync.network/api',
        ),
        'native' => 
        array (
          'name' => 'ZKsync Explorer',
          'url' => 'https://sepolia.explorer.zksync.io/',
          'blockExplorerApi' => 'https://block-explorer-api.sepolia.zksync.dev/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 3855712,
        ),
      ),
      'testnet' => true,
    ),
    314 => 
    array (
      'id' => 314,
      'name' => 'Filecoin Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'filecoin',
        'symbol' => 'FIL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.node.glif.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Filfox',
          'url' => 'https://filfox.info/en',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3328594,
        ),
      ),
    ),
    321 => 
    array (
      'id' => 321,
      'name' => 'KCC Mainnet',
      'network' => 'KCC Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'KCS',
        'symbol' => 'KCS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://kcc-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KCC Explorer',
          'url' => 'https://explorer.kcc.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 11760430,
        ),
      ),
      'testnet' => false,
    ),
    324 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 324,
      'name' => 'ZKsync Era',
      'network' => 'zksync-era',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.era.zksync.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.era.zksync.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://era.zksync.network/',
          'apiUrl' => 'https://api-era.zksync.network/api',
        ),
        'native' => 
        array (
          'name' => 'ZKsync Explorer',
          'url' => 'https://explorer.zksync.io/',
          'apiUrl' => 'https://block-explorer-api.mainnet.zksync.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 45659388,
        ),
      ),
    ),
    338 => 
    array (
      'id' => 338,
      'name' => 'Cronos Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CRO',
        'symbol' => 'tCRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-t3.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos Explorer',
          'url' => 'https://cronos.org/explorer/testnet3',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 10191251,
        ),
      ),
      'testnet' => true,
    ),
    360 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x6Ef8c69CfE4635d866e3E02732068022c06e724D',
            'blockCreated' => 20369940,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xEB06fFa16011B5628BaB98E29776361c83741dd3',
            'blockCreated' => 20369933,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x62Edd5f4930Ea92dCa3fB81689bDD9b9d076b57B',
            'blockCreated' => 20369935,
          ),
        ),
      ),
      'id' => 360,
      'name' => 'Shape',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.shape.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'shapescan',
          'url' => 'https://shapescan.xyz',
          'apiUrl' => 'https://shapescan.xyz/api',
        ),
      ),
      'sourceId' => 1,
    ),
    369 => 
    array (
      'id' => 369,
      'name' => 'PulseChain',
      'nativeCurrency' => 
      array (
        'name' => 'Pulse',
        'symbol' => 'PLS',
        'decimals' => 18,
      ),
      'testnet' => false,
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.pulsechain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.pulsechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PulseScan',
          'url' => 'https://scan.pulsechain.com',
          'apiUrl' => 'https://api.scan.pulsechain.com/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14353601,
        ),
      ),
    ),
    388 => 
    array (
      'id' => 388,
      'name' => 'Cronos zkEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Cronos zkEVM CRO',
        'symbol' => 'zkCRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.zkevm.cronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Cronos zkEVM (Mainnet) Chain Explorer',
          'url' => 'https://explorer.zkevm.cronos.org',
        ),
      ),
    ),
    420 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          5 => 
          array (
            'address' => '0xE6Dfba0953616Bacab0c9A8ecb3a9BBa77FC15c0',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 49461,
        ),
        'portal' => 
        array (
          5 => 
          array (
            'address' => '0x5b47E1A08Ea6d985D6649300584e6722Ec4B1383',
          ),
        ),
        'l1StandardBridge' => 
        array (
          5 => 
          array (
            'address' => '0x636Af16bf2f682dD3109e60102b8E1A089FedAa8',
          ),
        ),
      ),
      'id' => 420,
      'name' => 'Optimism Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli.optimism.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli-optimism.etherscan.io',
          'apiUrl' => 'https://goerli-optimism.etherscan.io/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 5,
    ),
    424 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'id' => 424,
      'network' => 'pgn',
      'name' => 'PGN',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.publicgoods.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PGN Explorer',
          'url' => 'https://explorer.publicgoods.network',
          'apiUrl' => 'https://explorer.publicgoods.network/api',
        ),
      ),
      'contracts' => 
      array (
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x9E6204F750cD866b299594e2aC9eA824E2e5f95c',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3380209,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xb26Fd985c5959bBB382BAFdD0b879E149e48116c',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0xD0204B9527C1bA7bD765Fa5CCD9355d38338272b',
          ),
        ),
      ),
      'sourceId' => 1,
    ),
    462 => 
    array (
      'id' => 462,
      'name' => 'Areon Network Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'TAREA',
        'symbol' => 'TAREA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.areon.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-ws.areon.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Areonscan',
          'url' => 'https://areonscan.com',
        ),
      ),
      'testnet' => true,
    ),
    463 => 
    array (
      'id' => 463,
      'name' => 'Areon Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'AREA',
        'symbol' => 'AREA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.areon.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet-ws.areon.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Areonscan',
          'url' => 'https://areonscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 353286,
        ),
      ),
      'testnet' => false,
    ),
    480 => 
    array (
      'id' => 480,
      'name' => 'World Chain',
      'network' => 'worldchain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://worldchain-mainnet.g.alchemy.com/public',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'World Chain Explorer',
          'url' => 'https://worldchain-mainnet.explorer.alchemy.com',
        ),
      ),
      'testnet' => false,
    ),
    545 => 
    array (
      'id' => 545,
      'name' => 'FlowEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flow',
        'symbol' => 'FLOW',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.evm.nodes.onflow.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Flow Diver',
          'url' => 'https://testnet.flowdiver.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 137518,
        ),
      ),
    ),
    570 => 
    array (
      'id' => 570,
      'name' => 'Rollux Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.rollux.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.rollux.com/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RolluxExplorer',
          'url' => 'https://explorer.rollux.com',
          'apiUrl' => 'https://explorer.rollux.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 119222,
        ),
      ),
    ),
    571 => 
    array (
      'id' => 571,
      'name' => 'MetaChain Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Metatime Coin',
        'symbol' => 'MTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.metatime.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MetaExplorer',
          'url' => 'https://explorer.metatime.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0000000000000000000000000000000000003001',
          'blockCreated' => 0,
        ),
      ),
    ),
    592 => 
    array (
      'id' => 592,
      'name' => 'Astar',
      'network' => 'astar-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Astar',
        'symbol' => 'ASTR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://astar.api.onfinality.io/public',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Astar Subscan',
          'url' => 'https://astar.subscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 761794,
        ),
      ),
      'testnet' => false,
    ),
    595 => 
    array (
      'id' => 595,
      'name' => 'Mandala TC9',
      'network' => 'mandala',
      'nativeCurrency' => 
      array (
        'name' => 'Mandala',
        'symbol' => 'mACA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth-rpc-tc9.aca-staging.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://eth-rpc-tc9.aca-staging.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mandala Blockscout',
          'url' => 'https://blockscout.mandala.aca-staging.network',
          'apiUrl' => 'https://blockscout.mandala.aca-staging.network/api',
        ),
      ),
      'testnet' => true,
    ),
    599 => 
    array (
      'id' => 599,
      'name' => 'Metis Goerli',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Metis Goerli',
        'symbol' => 'METIS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli.gateway.metisdevops.link',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Metis Goerli Explorer',
          'url' => 'https://goerli.explorer.metisdevops.link',
          'apiUrl' => 'https://goerli.explorer.metisdevops.link/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1006207,
        ),
      ),
    ),
    646 => 
    array (
      'id' => 646,
      'name' => 'FlowEVM Previewnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flow',
        'symbol' => 'FLOW',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://previewnet.evm.nodes.onflow.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Previewnet Explorer',
          'url' => 'https://previewnet.flowdiver.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 6205,
        ),
      ),
    ),
    686 => 
    array (
      'id' => 686,
      'name' => 'Karura',
      'network' => 'karura',
      'nativeCurrency' => 
      array (
        'name' => 'Karura',
        'symbol' => 'KAR',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth-rpc-karura.aca-api.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://eth-rpc-karura.aca-api.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Karura Blockscout',
          'url' => 'https://blockscout.karura.network',
          'apiUrl' => 'https://blockscout.karura.network/api',
        ),
      ),
      'testnet' => false,
    ),
    690 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0xC7bCb0e8839a28A1cFadd1CF716de9016CdA51ae',
            'blockCreated' => 19578329,
          ),
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xa426A052f657AEEefc298b3B5c35a470e4739d69',
            'blockCreated' => 19578337,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0xc473ca7E02af24c129c2eEf51F2aDf0411c1Df69',
            'blockCreated' => 19578331,
          ),
        ),
      ),
      'name' => 'Redstone',
      'id' => 690,
      'sourceId' => 1,
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.redstonechain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.redstonechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.redstone.xyz',
        ),
      ),
    ),
    698 => 
    array (
      'id' => 698,
      'name' => 'Matchain',
      'nativeCurrency' => 
      array (
        'name' => 'BNB',
        'symbol' => 'BNB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.matchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Matchain Scan',
          'url' => 'https://matchscan.io',
        ),
      ),
    ),
    699 => 
    array (
      'id' => 699,
      'name' => 'Matchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BNB',
        'symbol' => 'BNB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.matchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Matchain Scan',
          'url' => 'https://testnet.matchscan.io',
        ),
      ),
      'testnet' => true,
    ),
    701 => 
    array (
      'id' => 701,
      'name' => 'Koi Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Koi Network Native Token',
        'symbol' => 'KRING',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://koi-rpc.darwinia.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://koi-rpc.darwinia.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://koi-scan.darwinia.network',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 180001,
        ),
      ),
      'testnet' => true,
    ),
    721 => 
    array (
      'id' => 721,
      'name' => 'Lycan',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Lycan',
        'symbol' => 'LYC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.lycanchain.com',
            1 => 'https://us-east.lycanchain.com',
            2 => 'https://us-west.lycanchain.com',
            3 => 'https://eu-north.lycanchain.com',
            4 => 'https://eu-west.lycanchain.com',
            5 => 'https://asia-southeast.lycanchain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.lycanchain.com',
            1 => 'wss://us-east.lycanchain.com',
            2 => 'wss://us-west.lycanchain.com',
            3 => 'wss://eu-north.lycanchain.com',
            4 => 'wss://eu-west.lycanchain.com',
            5 => 'wss://asia-southeast.lycanchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Lycan Explorer',
          'url' => 'https://explorer.lycanchain.com',
        ),
      ),
    ),
    747 => 
    array (
      'id' => 747,
      'name' => 'FlowEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Flow',
        'symbol' => 'FLOW',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.evm.nodes.onflow.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mainnet Explorer',
          'url' => 'https://flowdiver.io',
        ),
      ),
    ),
    787 => 
    array (
      'id' => 787,
      'name' => 'Acala',
      'network' => 'acala',
      'nativeCurrency' => 
      array (
        'name' => 'Acala',
        'symbol' => 'ACA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth-rpc-acala.aca-api.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://eth-rpc-acala.aca-api.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Acala Blockscout',
          'url' => 'https://blockscout.acala.network',
          'apiUrl' => 'https://blockscout.acala.network/api',
        ),
      ),
      'testnet' => false,
    ),
    841 => 
    array (
      'id' => 841,
      'name' => 'Taraxa Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Tara',
        'symbol' => 'TARA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.taraxa.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taraxa Explorer',
          'url' => 'https://explorer.mainnet.taraxa.io',
        ),
      ),
    ),
    842 => 
    array (
      'id' => 842,
      'name' => 'Taraxa Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Tara',
        'symbol' => 'TARA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.taraxa.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taraxa Explorer',
          'url' => 'https://explorer.testnet.taraxa.io',
        ),
      ),
      'testnet' => true,
    ),
    888 => 
    array (
      'id' => 888,
      'name' => 'Wanchain',
      'nativeCurrency' => 
      array (
        'name' => 'WANCHAIN',
        'symbol' => 'WAN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://gwan-ssl.wandevs.org:56891',
            1 => 'https://gwan2-ssl.wandevs.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'WanScan',
          'url' => 'https://wanscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcDF6A1566e78EB4594c86Fe73Fcdc82429e97fbB',
          'blockCreated' => 25312390,
        ),
      ),
    ),
    919 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x2634BD65ba27AB63811c74A63118ACb312701Bfa',
            'blockCreated' => 3778393,
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x320e1580effF37E008F1C92700d1eBa47c1B23fD',
            'blockCreated' => 3778395,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xbC5C679879B2965296756CD959C3C739769995E2',
            'blockCreated' => 3778392,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xBAba8373113Fb7a68f195deF18732e01aF8eDfCF',
          'blockCreated' => 3019007,
        ),
      ),
      'id' => 919,
      'name' => 'Mode Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.mode.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://sepolia.explorer.mode.network',
          'apiUrl' => 'https://sepolia.explorer.mode.network/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    943 => 
    array (
      'id' => 943,
      'name' => 'PulseChain V4',
      'testnet' => true,
      'nativeCurrency' => 
      array (
        'name' => 'V4 Pulse',
        'symbol' => 'v4PLS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.v4.testnet.pulsechain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.v4.testnet.pulsechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PulseScan',
          'url' => 'https://scan.v4.testnet.pulsechain.com',
          'apiUrl' => 'https://scan.v4.testnet.pulsechain.com/api',
        ),
      ),
      'contracts' => 
      array (
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14353601,
        ),
      ),
    ),
    957 => 
    array (
      'id' => 957,
      'name' => 'Lyra Chain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.lyra.finance',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Lyra Explorer',
          'url' => 'https://explorer.lyra.finance',
          'apiUrl' => 'https://explorer.lyra.finance/api/v2',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1935198,
        ),
      ),
    ),
    997 => 
    array (
      'id' => 997,
      'name' => '5ireChain Thunder Testnet',
      'nativeCurrency' => 
      array (
        'name' => '5ire Token',
        'symbol' => '5IRE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.5ire.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => '5ireChain Explorer',
          'url' => 'https://explorer.5ire.network',
        ),
      ),
      'testnet' => true,
    ),
    999 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 189123,
        ),
        'portal' => 
        array (
          5 => 
          array (
            'address' => '0xDb9F51790365e7dc196e7D072728df39Be958ACe',
          ),
        ),
      ),
      'id' => 999,
      'name' => 'Zora Goerli Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zora Goerli',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.rpc.zora.energy',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.rpc.zora.energy',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://testnet.explorer.zora.energy',
          'apiUrl' => 'https://testnet.explorer.zora.energy/api',
        ),
      ),
      'sourceId' => 5,
      'testnet' => true,
    ),
    1001 => 
    array (
      'id' => 1001,
      'name' => 'Kairos Testnet',
      'network' => 'kairos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Kairos KAIA',
        'symbol' => 'KAIA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-en-kairos.node.kaia.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KaiaScan',
          'url' => 'https://kairos.kaiascan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 123390593,
        ),
      ),
      'testnet' => true,
    ),
    1004 => 
    array (
      'id' => 1004,
      'name' => 'Ekta Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EKTA',
        'symbol' => 'EKTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://test.ekta.io:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Test Ektascan',
          'url' => 'https://test.ektascan.io',
          'apiUrl' => 'https://test.ektascan.io/api',
        ),
      ),
      'testnet' => true,
    ),
    1017 => 
    array (
      'id' => 1017,
      'name' => 'BNB Greenfield Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BNB',
        'symbol' => 'BNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://greenfield-chain.bnbchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BNB Greenfield Mainnet Scan',
          'url' => 'https://greenfieldscan.com',
        ),
      ),
      'testnet' => false,
    ),
    1028 => 
    array (
      'id' => 1028,
      'name' => 'BitTorrent Chain Testnet',
      'network' => 'bittorrent-chain-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BitTorrent',
        'symbol' => 'BTT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testrpc.bittorrentchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bttcscan',
          'url' => 'https://testnet.bttcscan.com',
          'apiUrl' => 'https://testnet.bttcscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    1030 => 
    array (
      'id' => 1030,
      'name' => 'Conflux eSpace',
      'nativeCurrency' => 
      array (
        'name' => 'Conflux',
        'symbol' => 'CFX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.confluxrpc.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evm.confluxrpc.com/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ConfluxScan',
          'url' => 'https://evm.confluxscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xEFf0078910f638cd81996cc117bccD3eDf2B072F',
          'blockCreated' => 68602935,
        ),
      ),
    ),
    1038 => 
    array (
      'id' => 1038,
      'name' => 'Bronos Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Bronos Coin',
        'symbol' => 'tBRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-testnet.bronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BronoScan',
          'url' => 'https://tbroscan.bronos.org',
        ),
      ),
      'testnet' => true,
    ),
    1039 => 
    array (
      'id' => 1039,
      'name' => 'Bronos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BRO',
        'symbol' => 'BRO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.bronos.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BronoScan',
          'url' => 'https://broscan.bronos.org',
        ),
      ),
    ),
    1073 => 
    array (
      'id' => 1073,
      'name' => 'Shimmer Testnet',
      'network' => 'shimmer-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Shimmer',
        'symbol' => 'SMR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.testnet.shimmer.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Shimmer Network Explorer',
          'url' => 'https://explorer.evm.testnet.shimmer.network',
          'apiUrl' => 'https://explorer.evm.testnet.shimmer.network/api',
        ),
      ),
      'testnet' => true,
    ),
    1075 => 
    array (
      'id' => 1075,
      'name' => 'IOTA EVM Testnet',
      'network' => 'iotaevm-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IOTA',
        'symbol' => 'IOTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.testnet.iotaledger.net',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.json-rpc.evm.testnet.iotaledger.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.evm.testnet.iotaledger.net',
          'apiUrl' => 'https://explorer.evm.testnet.iotaledger.net/api',
        ),
      ),
      'testnet' => true,
    ),
    1088 => 
    array (
      'id' => 1088,
      'name' => 'Metis',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Metis',
        'symbol' => 'METIS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://andromeda.metis.io/?owner=1088',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Metis Explorer',
          'url' => 'https://explorer.metis.io',
          'apiUrl' => 'https://api.routescan.io/v2/network/mainnet/evm/1088/etherscan/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 2338552,
        ),
      ),
    ),
    1101 => 
    array (
      'id' => 1101,
      'name' => 'Polygon zkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zkevm-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://zkevm.polygonscan.com',
          'apiUrl' => 'https://api-zkevm.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 57746,
        ),
      ),
    ),
    1111 => 
    array (
      'id' => 1111,
      'name' => 'WEMIX',
      'network' => 'wemix-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'WEMIX',
        'symbol' => 'WEMIX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.wemix.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'wemixExplorer',
          'url' => 'https://explorer.wemix.com',
        ),
      ),
    ),
    1112 => 
    array (
      'id' => 1112,
      'name' => 'WEMIX Testnet',
      'network' => 'wemix-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'WEMIX',
        'symbol' => 'tWEMIX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.test.wemix.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'wemixExplorer',
          'url' => 'https://testnet.wemixscan.com',
          'apiUrl' => 'https://testnet.wemixscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    1116 => 
    array (
      'id' => 1116,
      'name' => 'Core Dao',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Core',
        'symbol' => 'CORE',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.coredao.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'CoreDao',
          'url' => 'https://scan.coredao.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 11907934,
        ),
      ),
      'testnet' => false,
    ),
    1123 => 
    array (
      'id' => 1123,
      'name' => 'B2 Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.bsquared.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://testnet-explorer.bsquared.network',
        ),
      ),
      'testnet' => true,
    ),
    1130 => 
    array (
      'id' => 1130,
      'network' => 'defichain-evm',
      'name' => 'DeFiChain EVM Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'DeFiChain',
        'symbol' => 'DFI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.mainnet.ocean.jellyfishsdk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DeFiScan',
          'url' => 'https://meta.defiscan.live',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 137852,
        ),
      ),
    ),
    1131 => 
    array (
      'id' => 1131,
      'network' => 'defichain-evm-testnet',
      'name' => 'DeFiChain EVM Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'DeFiChain',
        'symbol' => 'DFI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.testnet.ocean.jellyfishsdk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DeFiScan',
          'url' => 'https://meta.defiscan.live/?network=TestNet',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 156462,
        ),
      ),
      'testnet' => true,
    ),
    1135 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xA9d71E1dd7ca26F26e656E66d6AA81ed7f745bf0',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x113cB99283AF242Da0A0C54347667edF531Aa7d6',
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x26dB93F8b8b4f7016240af62F7730979d353f9A7',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x2658723Bf70c7667De6B25F99fcce13A16D25d08',
          ),
        ),
      ),
      'id' => 1135,
      'name' => 'Lisk',
      'network' => 'lisk',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.api.lisk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.lisk.com',
          'apiUrl' => 'https://blockscout.lisk.com/api',
        ),
      ),
      'sourceId' => 1,
    ),
    1281 => 
    array (
      'id' => 1281,
      'name' => 'Moonbeam Development Node',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DEV',
        'symbol' => 'DEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:9944',
          ),
          'webSocket' => 
          array (
            0 => 'wss://127.0.0.1:9944',
          ),
        ),
      ),
    ),
    1284 => 
    array (
      'id' => 1284,
      'name' => 'Moonbeam',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'GLMR',
        'symbol' => 'GLMR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://moonbeam.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://moonbeam.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Moonscan',
          'url' => 'https://moonscan.io',
          'apiUrl' => 'https://api-moonbeam.moonscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 609002,
        ),
      ),
      'testnet' => false,
    ),
    1285 => 
    array (
      'id' => 1285,
      'name' => 'Moonriver',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MOVR',
        'symbol' => 'MOVR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://moonriver.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://moonriver.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Moonscan',
          'url' => 'https://moonriver.moonscan.io',
          'apiUrl' => 'https://api-moonriver.moonscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1597904,
        ),
      ),
      'testnet' => false,
    ),
    1287 => 
    array (
      'id' => 1287,
      'name' => 'Moonbase Alpha',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DEV',
        'symbol' => 'DEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.api.moonbase.moonbeam.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://wss.api.moonbase.moonbeam.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Moonscan',
          'url' => 'https://moonbase.moonscan.io',
          'apiUrl' => 'https://moonbase.moonscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1850686,
        ),
      ),
      'testnet' => true,
    ),
    1301 => 
    array (
      'id' => 1301,
      'name' => 'Unichain Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.unichain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Uniscan',
          'url' => 'https://sepolia.uniscan.xyz',
          'apiUrl' => 'https://api-sepolia.uniscan.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 0,
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    1328 => 
    array (
      'id' => 1328,
      'name' => 'Sei Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sei',
        'symbol' => 'SEI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-rpc-testnet.sei-apis.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evm-ws-testnet.sei-apis.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Seitrace',
          'url' => 'https://seitrace.com',
        ),
      ),
      'testnet' => true,
    ),
    1329 => 
    array (
      'id' => 1329,
      'name' => 'Sei Network',
      'nativeCurrency' => 
      array (
        'name' => 'Sei',
        'symbol' => 'SEI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-rpc.sei-apis.com/',
          ),
          'webSocket' => 
          array (
            0 => 'wss://evm-ws.sei-apis.com/',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Seitrace',
          'url' => 'https://seitrace.com',
          'apiUrl' => 'https://seitrace.com/pacific-1/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
        ),
      ),
    ),
    1337 => 
    array (
      'id' => 1337,
      'name' => 'Localhost',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    1338 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 1338,
      'name' => 'Elysium Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'LAVA',
        'symbol' => 'LAVA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://elysium-test-rpc.vulcanforged.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Elysium testnet explorer',
          'url' => 'https://elysium-explorer.vulcanforged.com',
        ),
      ),
      'testnet' => true,
    ),
    1442 => 
    array (
      'id' => 1442,
      'name' => 'Polygon zkEVM Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.public.zkevm-test.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://testnet-zkevm.polygonscan.com',
          'apiUrl' => 'https://testnet-zkevm.polygonscan.com/api',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 525686,
        ),
      ),
    ),
    1453 => 
    array (
      'id' => 1453,
      'name' => 'MetaChain Istanbul',
      'nativeCurrency' => 
      array (
        'name' => 'Metatime Coin',
        'symbol' => 'MTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://istanbul-rpc.metachain.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MetaExplorer',
          'url' => 'https://istanbul-explorer.metachain.dev',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0000000000000000000000000000000000003001',
          'blockCreated' => 0,
        ),
      ),
      'testnet' => true,
    ),
    1513 => 
    array (
      'id' => 1513,
      'name' => 'Story Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IP',
        'symbol' => 'IP',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.storyrpc.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Story Testnet Explorer',
          'url' => 'https://testnet.storyscan.xyz',
        ),
      ),
      'testnet' => true,
    ),
    1559 => 
    array (
      'id' => 1559,
      'name' => 'Tenet',
      'network' => 'tenet-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'TENET',
        'symbol' => 'TENET',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.tenet.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'TenetScan Mainnet',
          'url' => 'https://tenetscan.io',
          'apiUrl' => 'https://tenetscan.io/api',
        ),
      ),
      'testnet' => false,
    ),
    1625 => 
    array (
      'id' => 1625,
      'name' => 'Gravity Alpha Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'G',
        'symbol' => 'G',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gravity.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Gravity Explorer',
          'url' => 'https://explorer.gravity.xyz',
          'apiUrl' => 'https://explorer.gravity.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xf8ac4BEB2F75d2cFFb588c63251347fdD629B92c',
          'blockCreated' => 16851,
        ),
      ),
    ),
    1663 => 
    array (
      'id' => 1663,
      'name' => 'Horizen Gobi Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Test ZEN',
        'symbol' => 'tZEN',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://gobi-testnet.horizenlabs.io/ethv1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Gobi Explorer',
          'url' => 'https://gobi-explorer.horizen.io',
        ),
      ),
      'contracts' => 
      array (
      ),
      'testnet' => true,
    ),
    1686 => 
    array (
      'id' => 1686,
      'name' => 'Mint Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.mintchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mintchain Testnet explorer',
          'url' => 'https://testnet-explorer.mintchain.io',
        ),
      ),
      'testnet' => true,
    ),
    1729 => 
    array (
      'id' => 1729,
      'name' => 'Reya Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.reya.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.reya.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Reya Network Explorer',
          'url' => 'https://explorer.reya.network',
        ),
      ),
      'testnet' => false,
    ),
    1750 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x3B1F7aDa0Fcc26B13515af752Dd07fB1CAc11426',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 0,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x3F37aBdE2C6b5B2ed6F8045787Df1ED1E3753956',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x6d0f65D59b55B0FEC5d2d15365154DcADC140BF3',
          ),
        ),
      ),
      'id' => 1750,
      'name' => 'Metal L2',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.metall2.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.metall2.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.metall2.com',
          'apiUrl' => 'https://explorer.metall2.com/api',
        ),
      ),
      'sourceId' => 1,
    ),
    1890 => 
    array (
      'id' => 1890,
      'name' => 'LightLink Phoenix Mainnet',
      'network' => 'lightlink-phoenix',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://replicator.phoenix.lightlink.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LightLink Phoenix Explorer',
          'url' => 'https://phoenix.lightlink.io',
        ),
      ),
      'testnet' => false,
    ),
    1891 => 
    array (
      'id' => 1891,
      'name' => 'LightLink Pegasus Testnet',
      'network' => 'lightlink-pegasus',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://replicator.pegasus.lightlink.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LightLink Pegasus Explorer',
          'url' => 'https://pegasus.lightlink.io',
        ),
      ),
      'testnet' => true,
    ),
    1946 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0xF69dB6cA559C52d9A4BB6e2B2901f490Ca35Fbf6',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x710e5286C746eC38beeB7538d0146f60D27be343',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x65ea1489741A5D72fFdD8e6485B216bBdcC15Af3',
            'blockCreated' => 6466136,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0x5f5a404A5edabcDD80DB05E8e54A78c9EBF000C2',
            'blockCreated' => 6466136,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1,
        ),
      ),
      'id' => 1946,
      'name' => 'Soneium Minato Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.minato.soneium.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer-testnet.soneium.org',
          'apiUrl' => 'https://explorer-testnet.soneium.org/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    1993 => 
    array (
      'id' => 1993,
      'name' => 'B3 Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.b3.fun/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://sepolia.explorer.b3.fun',
        ),
      ),
      'testnet' => true,
      'sourceId' => 168587773,
    ),
    1994 => 
    array (
      'id' => 1994,
      'name' => 'Ekta',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EKTA',
        'symbol' => 'EKTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://main.ekta.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ektascan',
          'url' => 'https://ektascan.io',
          'apiUrl' => 'https://ektascan.io/api',
        ),
      ),
    ),
    2000 => 
    array (
      'id' => 2000,
      'name' => 'Dogechain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Wrapped Dogecoin',
        'symbol' => 'WDOGE',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.dogechain.dog',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DogeChainExplorer',
          'url' => 'https://explorer.dogechain.dog',
          'apiUrl' => 'https://explorer.dogechain.dog/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x68a8609a60a008EFA633dfdec592c03B030cC508',
          'blockCreated' => 25384031,
        ),
      ),
    ),
    2017 => 
    array (
      'id' => 2017,
      'name' => 'Telcoin Adiri Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Telcoin',
        'symbol' => 'TEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.telcoin.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'telscan',
          'url' => 'https://telscan.io',
        ),
      ),
      'testnet' => true,
    ),
    2020 => 
    array (
      'id' => 2020,
      'name' => 'Ronin',
      'nativeCurrency' => 
      array (
        'name' => 'RON',
        'symbol' => 'RON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.roninchain.com/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ronin Explorer',
          'url' => 'https://app.roninchain.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 26023535,
        ),
      ),
    ),
    2021 => 
    array (
      'id' => 2021,
      'name' => 'Saigon Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'RON',
        'symbol' => 'RON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://saigon-testnet.roninchain.com/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Saigon Explorer',
          'url' => 'https://saigon-app.roninchain.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 18736871,
        ),
      ),
      'testnet' => true,
    ),
    2022 => 
    array (
      'id' => 2022,
      'name' => 'Beresheet BereEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Testnet EDG',
        'symbol' => 'tEDG',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://beresheet-evm.jelliedowl.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgscan by Bharathcoorg',
          'url' => 'https://testnet.edgscan.live',
          'apiUrl' => 'https://testnet.edgscan.live/api',
        ),
      ),
    ),
    2024 => 
    array (
      'id' => 2024,
      'name' => 'Swan Saturn Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Swan Ether',
        'symbol' => 'sETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://saturn-rpc.swanchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Swan Explorer',
          'url' => 'https://saturn-explorer.swanchain.io',
        ),
      ),
      'testnet' => true,
    ),
    2026 => 
    array (
      'id' => 2026,
      'name' => 'Edgeless Network',
      'nativeCurrency' => 
      array (
        'name' => 'Edgeless Wrapped ETH',
        'symbol' => 'EwETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.edgeless.network/http',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.edgeless.network/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Edgeless Explorer',
          'url' => 'https://explorer.edgeless.network',
        ),
      ),
    ),
    2192 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          1 => 
          array (
            'address' => '0x472562Fcf26D6b2793f8E0b0fB660ba0E5e08A46',
          ),
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x2172e492Fc807F5d5645D0E3543f139ECF539294',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x79f446D024d74D0Bb6E699C131c703463c5D65E9',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x6534Bdb6b5c060d3e6aa833433333135eFE8E0aA',
          ),
        ),
      ),
      'id' => 2192,
      'network' => 'snaxchain-mainnet',
      'name' => 'SnaxChain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.snaxchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Snax Explorer',
          'url' => 'https://explorer.snaxchain.io',
          'apiUrl' => 'https://explorer.snaxchain.io/api',
        ),
      ),
      'sourceId' => 1,
    ),
    2221 => 
    array (
      'id' => 2221,
      'name' => 'Kava EVM Testnet',
      'network' => 'kava-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Kava',
        'symbol' => 'KAVA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.testnet.kava.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kava EVM Testnet Explorer',
          'url' => 'https://testnet.kavascan.com/',
          'apiUrl' => 'https://testnet.kavascan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xDf1D724A7166261eEB015418fe8c7679BBEa7fd6',
          'blockCreated' => 7242179,
        ),
      ),
      'testnet' => true,
    ),
    2222 => 
    array (
      'id' => 2222,
      'name' => 'Kava EVM',
      'network' => 'kava-mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Kava',
        'symbol' => 'KAVA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm.kava.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kava EVM Explorer',
          'url' => 'https://kavascan.com',
          'apiUrl' => 'https://kavascan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 3661165,
        ),
      ),
      'testnet' => false,
    ),
    2331 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0xDb5c46C3Eaa6Ed6aE8b2379785DF7dd029C0dC81',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 55697,
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xcBD77E8E1E7F06B25baDe67142cdE82652Da7b57',
            'blockCreated' => 5345035,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xdDD29bb63B0839FB1cE0eE439Ff027738595D07B',
          ),
        ),
      ),
      'id' => 2331,
      'name' => 'RSS3 VSL Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'RSS3',
        'symbol' => 'RSS3',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.rss3.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSS3 VSL Sepolia Testnet Scan',
          'url' => 'https://scan.testnet.rss3.io',
          'apiUrl' => 'https://scan.testnet.rss3.io/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    2340 => 
    array (
      'id' => 2340,
      'name' => 'Atleta Olympia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Atla',
        'symbol' => 'ATLA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.atleta.network:9944',
            1 => 'https://testnet-rpc.atleta.network',
          ),
          'ws' => 
          array (
            0 => 'wss://testnet-rpc.atleta.network:9944',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Atleta Olympia Explorer',
          'url' => 'https://blockscout.atleta.network',
          'apiUrl' => 'https://blockscout.atleta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x1472ec6392180fb84F345d2455bCC75B26577115',
          'blockCreated' => 1076473,
        ),
      ),
      'testnet' => true,
    ),
    2355 => 
    array (
      'id' => 2355,
      'name' => 'Silicon zkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.silicon.network',
            1 => 'https://silicon-mainnet.nodeinfra.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SiliconScope',
          'url' => 'https://scope.silicon.network',
        ),
      ),
    ),
    2358 => 
    array (
      'id' => 2358,
      'name' => 'Kroma Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.sepolia.kroma.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kroma Sepolia Explorer',
          'url' => 'https://blockscout.sepolia.kroma.network',
          'apiUrl' => 'https://blockscout.sepolia.kroma.network/api',
        ),
      ),
      'testnet' => true,
    ),
    2442 => 
    array (
      'id' => 2442,
      'name' => 'Polygon zkEVM Cardona',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.cardona.zkevm-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://cardona-zkevm.polygonscan.com',
          'apiUrl' => 'https://cardona-zkevm.polygonscan.com/api',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 114091,
        ),
      ),
    ),
    2522 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          17000 => 
          array (
            'address' => '0x715EA64DA13F4d0831ece4Ad3E8c1aa013167F32',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          17000 => 
          array (
            'address' => '0xB9c64BfA498d5b9a8398Ed6f46eb76d90dE5505d',
            'blockCreated' => 318416,
          ),
        ),
        'l1StandardBridge' => 
        array (
          17000 => 
          array (
            'address' => '0x0BaafC217162f64930909aD9f2B27125121d6332',
            'blockCreated' => 318416,
          ),
        ),
      ),
      'id' => 2522,
      'name' => 'Fraxtal Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Frax Ether',
        'symbol' => 'frxETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.frax.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'fraxscan testnet',
          'url' => 'https://holesky.fraxscan.com',
          'apiUrl' => 'https://api-holesky.fraxscan.com/api',
        ),
      ),
      'sourceId' => 17000,
    ),
    2525 => 
    array (
      'id' => 2525,
      'name' => 'inEVM Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Injective',
        'symbol' => 'INJ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.rpc.inevm.com/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'inEVM Explorer',
          'url' => 'https://inevm.calderaexplorer.xyz',
          'apiUrl' => 'https://inevm.calderaexplorer.xyz/api/v2',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 118606,
        ),
      ),
    ),
    2710 => 
    array (
      'id' => 2710,
      'name' => 'Morph Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.morphl2.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Morph Testnet Explorer',
          'url' => 'https://explorer-testnet.morphl2.io',
          'apiUrl' => 'https://explorer-api-testnet.morphl2.io/api',
        ),
      ),
      'testnet' => true,
    ),
    2730 => 
    array (
      'id' => 2730,
      'name' => 'XR Sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'tXR',
        'symbol' => 'tXR',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xr-sepolia-testnet.rpc.caldera.xyz/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://xr-sepolia-testnet.explorer.caldera.xyz',
        ),
      ),
      'testnet' => true,
    ),
    2810 => 
    array (
      'id' => 2810,
      'name' => 'Morph Holesky',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-quicknode-holesky.morphl2.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-quicknode-holesky.morphl2.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Morph Holesky Explorer',
          'url' => 'https://explorer-holesky.morphl2.io',
          'apiUrl' => 'https://explorer-api-holesky.morphl2.io/api?',
        ),
      ),
      'testnet' => true,
    ),
    2882 => 
    array (
      'id' => 2882,
      'name' => 'Chips Network',
      'network' => 'CHIPS',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IOTA',
        'symbol' => 'IOTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://node.chips.ooo/wasp/api/v1/chains/iota1pp3d3mnap3ufmgqnjsnw344sqmf5svjh26y2khnmc89sv6788y3r207a8fn/evm',
          ),
        ),
      ),
    ),
    2911 => 
    array (
      'id' => 2911,
      'name' => 'HYCHAIN',
      'nativeCurrency' => 
      array (
        'name' => 'HYTOPIA',
        'symbol' => 'TOPIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.hychain.com/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HYCHAIN Explorer',
          'url' => 'https://explorer.hychain.com',
        ),
      ),
      'testnet' => false,
    ),
    3109 => 
    array (
      'id' => 3109,
      'name' => 'SatoshiVM Alpha Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://alpha-rpc-node-http.svmscan.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://svmscan.io',
          'apiUrl' => 'https://svmscan.io/api',
        ),
      ),
    ),
    3110 => 
    array (
      'id' => 3110,
      'name' => 'SatoshiVM Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://test-rpc-node-http.svmscan.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://testnet.svmscan.io',
          'apiUrl' => 'https://testnet.svmscan.io/api',
        ),
      ),
      'testnet' => true,
    ),
    3141 => 
    array (
      'id' => 3141,
      'name' => 'Filecoin Hyperspace',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'testnet filecoin',
        'symbol' => 'tFIL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.hyperspace.node.glif.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Filfox',
          'url' => 'https://hyperspace.filfox.info/en',
        ),
      ),
      'testnet' => true,
    ),
    3636 => 
    array (
      'id' => 3636,
      'name' => 'Botanix Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Botanix',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://poa-node.botanixlabs.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://blockscout.botanixlabs.dev',
          'apiUrl' => 'https://blockscout.botanixlabs.dev',
        ),
      ),
      'testnet' => true,
    ),
    3737 => 
    array (
      'id' => 3737,
      'name' => 'Crossbell',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CSB',
        'symbol' => 'CSB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.crossbell.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'CrossScan',
          'url' => 'https://scan.crossbell.io',
          'apiUrl' => 'https://scan.crossbell.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 38246031,
        ),
      ),
    ),
    3776 => 
    array (
      'id' => 3776,
      'name' => 'Astar zkEVM',
      'network' => 'AstarZkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-zkevm.astar.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Astar zkEVM Explorer',
          'url' => 'https://astar-zkevm.explorer.startale.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 93528,
        ),
      ),
      'testnet' => false,
    ),
    3939 => 
    array (
      'id' => 3939,
      'name' => 'DOS Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DOS Chain Testnet',
        'symbol' => 'DOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://test.doschain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DOS Chain Testnet Explorer',
          'url' => 'https://test.doscan.io',
          'apiUrl' => 'https://api-test.doscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 69623,
        ),
      ),
      'testnet' => true,
    ),
    3993 => 
    array (
      'id' => 3993,
      'name' => 'APEX Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.apexlayer.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp-testnet.apexlayer.xyz',
          'apiUrl' => 'https://exp-testnet.apexlayer.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xf7642be33a6b18D16a995657adb5a68CD0438aE2',
          'blockCreated' => 283775,
        ),
      ),
      'testnet' => true,
    ),
    4002 => 
    array (
      'id' => 4002,
      'name' => 'Fantom Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Fantom',
        'symbol' => 'FTM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.fantom.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FTMScan',
          'url' => 'https://testnet.ftmscan.com',
          'apiUrl' => 'https://testnet.ftmscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 8328688,
        ),
      ),
      'testnet' => true,
    ),
    4090 => 
    array (
      'id' => 4090,
      'network' => 'oasis-testnet',
      'name' => 'Oasis Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Fasttoken',
        'symbol' => 'FTN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc1.oasis.bahamutchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ftnscan',
          'url' => 'https://oasis.ftnscan.com',
          'apiUrl' => 'https://oasis.ftnscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    4200 => 
    array (
      'id' => 4200,
      'name' => 'Merlin',
      'nativeCurrency' => 
      array (
        'name' => 'BTC',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.merlinchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://scan.merlinchain.io',
          'apiUrl' => 'https://scan.merlinchain.io/api',
        ),
      ),
    ),
    4201 => 
    array (
      'id' => 4201,
      'name' => 'LUKSO Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'LUKSO Testnet',
        'symbol' => 'LYXt',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.lukso.network',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws-rpc.testnet.lukso.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LUKSO Testnet Explorer',
          'url' => 'https://explorer.execution.testnet.lukso.network',
          'apiUrl' => 'https://api.explorer.execution.testnet.lukso.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 605348,
        ),
      ),
      'testnet' => true,
    ),
    4202 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0xA0E35F56C318DE1bD5D9ca6A94Fe7e37C5663348',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xe3d90F21490686Ec7eF37BE788E02dfC12787264',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0x1Fb30e446eA791cd1f011675E5F3f5311b70faF5',
          ),
        ),
      ),
      'id' => 4202,
      'network' => 'lisk-sepolia',
      'name' => 'Lisk Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sepolia-api.lisk.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://sepolia-blockscout.lisk.com',
          'apiUrl' => 'https://sepolia-blockscout.lisk.com/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    4242 => 
    array (
      'id' => 4242,
      'name' => 'Nexi',
      'nativeCurrency' => 
      array (
        'name' => 'Nexi',
        'symbol' => 'NEXI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.chain.nexi.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'NexiScan',
          'url' => 'https://www.nexiscan.com',
          'apiUrl' => 'https://www.nexiscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x0277A46Cc69A57eE3A6C8c158bA874832F718B8E',
          'blockCreated' => 25770160,
        ),
      ),
    ),
    4337 => 
    array (
      'id' => 4337,
      'name' => 'Beam',
      'network' => 'beam',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Beam',
        'symbol' => 'BEAM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://build.onbeam.com/rpc',
          ),
          'webSocket' => 
          array (
            0 => 'wss://build.onbeam.com/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Beam Explorer',
          'url' => 'https://subnets.avax.network/beam',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x4956f15efdc3dc16645e90cc356eafa65ffc65ec',
          'blockCreated' => 1,
        ),
      ),
    ),
    4460 => 
    array (
      'id' => 4460,
      'name' => 'Orderly Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://l2-orderly-l2-4460-sepolia-8tc3sd7dvy.t.conduit.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Orderly Explorer',
          'url' => 'https://explorerl2new-orderly-l2-4460-sepolia-8tc3sd7dvy.t.conduit.xyz',
        ),
      ),
      'testnet' => true,
    ),
    4689 => 
    array (
      'id' => 4689,
      'name' => 'IoTeX',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IoTeX',
        'symbol' => 'IOTX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://babel-api.mainnet.iotex.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://babel-api.mainnet.iotex.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'IoTeXScan',
          'url' => 'https://iotexscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 22163670,
        ),
      ),
    ),
    4690 => 
    array (
      'id' => 4690,
      'name' => 'IoTeX Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IoTeX',
        'symbol' => 'IOTX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://babel-api.testnet.iotex.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://babel-api.testnet.iotex.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'IoTeXScan',
          'url' => 'https://testnet.iotexscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xb5cecD6894c6f473Ec726A176f1512399A2e355d',
          'blockCreated' => 24347592,
        ),
      ),
      'testnet' => true,
    ),
    4759 => 
    array (
      'id' => 4759,
      'name' => 'MEVerse Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MEVerse',
        'symbol' => 'MEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.meversetestnet.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://testnet.meversescan.io/',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 64371115,
        ),
      ),
      'testnet' => true,
    ),
    4777 => 
    array (
      'id' => 4777,
      'name' => 'BlackFort Exchange Network Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BlackFort Testnet Token',
        'symbol' => 'TBXN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.blackfort.network/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet-explorer.blackfort.network',
          'apiUrl' => 'https://testnet-explorer.blackfort.network/api',
        ),
      ),
      'testnet' => true,
    ),
    4801 => 
    array (
      'id' => 4801,
      'name' => 'World Chain Sepolia',
      'network' => 'worldchain-sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://worldchain-sepolia.g.alchemy.com/public',
          ),
        ),
        'public' => 
        array (
          'http' => 
          array (
            0 => 'https://worldchain-sepolia.g.alchemy.com/public',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'World Chain Sepolia Explorer',
          'url' => 'https://worldchain-sepolia.explorer.alchemy.com',
        ),
      ),
      'testnet' => true,
    ),
    4999 => 
    array (
      'id' => 4999,
      'name' => 'BlackFort Exchange Network',
      'nativeCurrency' => 
      array (
        'name' => 'BlackFort Token',
        'symbol' => 'BXN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.blackfort.network/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.blackfort.network',
          'apiUrl' => 'https://explorer.blackfort.network/api',
        ),
      ),
    ),
    5000 => 
    array (
      'id' => 5000,
      'name' => 'Mantle',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MNT',
        'symbol' => 'MNT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mantle.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mantle Explorer',
          'url' => 'https://mantlescan.xyz/',
          'apiUrl' => 'https://api.mantlescan.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 304717,
        ),
      ),
    ),
    5001 => 
    array (
      'id' => 5001,
      'name' => 'Mantle Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MNT',
        'symbol' => 'MNT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.mantle.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mantle Testnet Explorer',
          'url' => 'https://explorer.testnet.mantle.xyz',
          'apiUrl' => 'https://explorer.testnet.mantle.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 561333,
        ),
      ),
      'testnet' => true,
    ),
    5003 => 
    array (
      'id' => 5003,
      'name' => 'Mantle Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MNT',
        'symbol' => 'MNT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sepolia.mantle.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Mantle Testnet Explorer',
          'url' => 'https://explorer.sepolia.mantle.xyz/',
          'apiUrl' => 'https://explorer.sepolia.mantle.xyz/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 4584012,
        ),
      ),
      'testnet' => true,
    ),
    5112 => 
    array (
      'id' => 5112,
      'name' => 'Ham',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ham',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ham.fun',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.ham.fun',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ham Chain Explorer',
          'url' => 'https://explorer.ham.fun',
          'apiUrl' => 'https://explorer.ham.fun/api/v2',
        ),
      ),
    ),
    5165 => 
    array (
      'id' => 5165,
      'network' => 'bahamut',
      'name' => 'Bahamut',
      'nativeCurrency' => 
      array (
        'name' => 'Fasttoken',
        'symbol' => 'FTN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc1.bahamut.io',
            1 => 'https://bahamut-rpc.publicnode.com',
            2 => 'https://rpc2.bahamut.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws1.sahara.bahamutchain.com',
            1 => 'wss://bahamut-rpc.publicnode.com',
            2 => 'wss://ws2.sahara.bahamutchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ftnscan',
          'url' => 'https://www.ftnscan.com',
          'apiUrl' => 'https://www.ftnscan.com/api',
        ),
      ),
    ),
    5611 => 
    array (
      'id' => 5611,
      'name' => 'opBNB Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'tBNB',
        'symbol' => 'tBNB',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://opbnb-testnet-rpc.bnbchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'opbnbscan',
          'url' => 'https://testnet.opbnbscan.com',
        ),
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3705108,
        ),
        'l2OutputOracle' => 
        array (
          97 => 
          array (
            'address' => '0xFf2394Bb843012562f4349C6632a0EcB92fC8810',
          ),
        ),
        'portal' => 
        array (
          97 => 
          array (
            'address' => '0x4386C8ABf2009aC0c263462Da568DD9d46e52a31',
          ),
        ),
        'l1StandardBridge' => 
        array (
          97 => 
          array (
            'address' => '0x677311Fd2cCc511Bbc0f581E8d9a07B033D5E840',
          ),
        ),
      ),
      'testnet' => true,
      'sourceId' => 97,
    ),
    5700 => 
    array (
      'id' => 5700,
      'name' => 'Syscoin Tanenbaum Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.tanenbaum.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.tanenbaum.io/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SyscoinTestnetExplorer',
          'url' => 'https://tanenbaum.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 271288,
        ),
      ),
    ),
    6000 => 
    array (
      'id' => 6000,
      'name' => 'BounceBit Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'BounceBit',
        'symbol' => 'BB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://fullnode-testnet.bouncebitapi.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BB Scan',
          'url' => 'https://testnet.bbscan.io',
        ),
      ),
      'testnet' => true,
    ),
    6001 => 
    array (
      'id' => 6001,
      'name' => 'BounceBit Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'BounceBit',
        'symbol' => 'BB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://fullnode-mainnet.bouncebitapi.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BB Scan',
          'url' => 'https://bbscan.io',
        ),
      ),
      'testnet' => false,
    ),
    7000 => 
    array (
      'id' => 7000,
      'name' => 'ZetaChain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zeta',
        'symbol' => 'ZETA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zetachain-evm.blockpi.network/v1/rpc/public',
          ),
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1632781,
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ZetaScan',
          'url' => 'https://explorer.zetachain.com',
        ),
      ),
      'testnet' => false,
    ),
    7001 => 
    array (
      'id' => 7001,
      'name' => 'ZetaChain Athens Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zeta',
        'symbol' => 'aZETA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zetachain-athens-evm.blockpi.network/v1/rpc/public',
          ),
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 2715217,
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'ZetaScan',
          'url' => 'https://athens.explorer.zetachain.com',
        ),
      ),
      'testnet' => true,
    ),
    7332 => 
    array (
      'id' => 7332,
      'name' => 'Horizen EON',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ZEN',
        'symbol' => 'ZEN',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eon-rpc.horizenlabs.io/ethv1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'EON Explorer',
          'url' => 'https://eon-explorer.horizenlabs.io',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    7518 => 
    array (
      'id' => 7518,
      'name' => 'MEVerse Chain Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MEVerse',
        'symbol' => 'MEV',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.meversemainnet.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://www.meversescan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 86881340,
        ),
      ),
    ),
    7560 => 
    array (
      'id' => 7560,
      'name' => 'Cyber',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://cyber.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://cyberscan.co',
          'apiUrl' => 'https://cyberscan.co/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 0,
        ),
      ),
    ),
    7668 => 
    array (
      'id' => 7668,
      'name' => 'The Root Network',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'XRP',
        'symbol' => 'XRP',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://root.rootnet.live/archive',
          ),
          'webSocket' => 
          array (
            0 => 'wss://root.rootnet.live/archive/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Rootscan',
          'url' => 'https://rootscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xc9C2E2429AeC354916c476B30d729deDdC94988d',
          'blockCreated' => 9218338,
        ),
      ),
    ),
    7672 => 
    array (
      'id' => 7672,
      'name' => 'The Root Network - Porcini',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'XRP',
        'symbol' => 'XRP',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://porcini.rootnet.app/archive',
          ),
          'webSocket' => 
          array (
            0 => 'wss://porcini.rootnet.app/archive/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Rootscan',
          'url' => 'https://porcini.rootscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xc9C2E2429AeC354916c476B30d729deDdC94988d',
          'blockCreated' => 10555692,
        ),
      ),
      'testnet' => true,
    ),
    7700 => 
    array (
      'id' => 7700,
      'name' => 'Canto',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Canto',
        'symbol' => 'CANTO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://canto.gravitychain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Tuber.Build (Blockscout)',
          'url' => 'https://tuber.build',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 2905789,
        ),
      ),
    ),
    7887 => 
    array (
      'id' => 7887,
      'name' => 'Kinto Mainnet',
      'network' => 'Kinto Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.kinto.xyz/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kinto Explorer',
          'url' => 'https://explorer.kinto.xyz',
        ),
      ),
      'testnet' => false,
    ),
    7979 => 
    array (
      'id' => 7979,
      'name' => 'DOS Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DOS Chain',
        'symbol' => 'DOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://main.doschain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DOS Chain Explorer',
          'url' => 'https://doscan.io',
          'apiUrl' => 'https://api.doscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 161908,
        ),
      ),
    ),
    8082 => 
    array (
      'id' => 8082,
      'name' => 'Shardeum Sphinx',
      'nativeCurrency' => 
      array (
        'name' => 'SHARDEUM',
        'symbol' => 'SHM',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sphinx.shardeum.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Shardeum Explorer',
          'url' => 'https://explorer-sphinx.shardeum.org',
        ),
      ),
      'testnet' => true,
    ),
    8217 => 
    array (
      'id' => 8217,
      'name' => 'Kaia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Kaia',
        'symbol' => 'KAIA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://public-en.node.kaia.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'KaiaScan',
          'url' => 'https://kaiascan.io',
          'apiUrl' => 'https://api-cypress.klaytnscope.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 96002415,
        ),
      ),
    ),
    8333 => 
    array (
      'id' => 8333,
      'name' => 'B3',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.b3.fun/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.b3.fun',
        ),
      ),
      'sourceId' => 8453,
    ),
    8408 => 
    array (
      'id' => 8408,
      'name' => 'Zenchain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ZCX',
        'symbol' => 'ZCX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zenchain-testnet.api.onfinality.io/public',
          ),
          'webSocket' => 
          array (
            0 => 'wss://zenchain-testnet.api.onfinality.io/public-ws',
          ),
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 230019,
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zentrace',
          'url' => 'https://zentrace.io',
        ),
      ),
      'testnet' => true,
    ),
    8453 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x56315b90c40730925ec5485cf004d835058518A0',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 5022,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x49048044D57e1C92A77f79988d21Fa8fAF74E97e',
            'blockCreated' => 17482143,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x3154Cf16ccdb4C6d922629664174b904d80F2C35',
            'blockCreated' => 17482143,
          ),
        ),
      ),
      'id' => 8453,
      'name' => 'Base',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.base.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Basescan',
          'url' => 'https://basescan.org',
          'apiUrl' => 'https://api.basescan.org/api',
        ),
      ),
      'sourceId' => 1,
    ),
    8822 => 
    array (
      'id' => 8822,
      'name' => 'IOTA EVM',
      'network' => 'iotaevm',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'IOTA',
        'symbol' => 'IOTA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://json-rpc.evm.iotaledger.net',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.json-rpc.evm.iotaledger.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.evm.iota.org',
          'apiUrl' => 'https://explorer.evm.iota.org/api',
        ),
      ),
    ),
    8866 => 
    array (
      'id' => 8866,
      'name' => 'SuperLumio',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.lumio.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Lumio explorer',
          'url' => 'https://explorer.lumio.io',
        ),
      ),
      'testnet' => false,
    ),
    8880 => 
    array (
      'id' => 8880,
      'name' => 'Unique Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'UNQ',
        'symbol' => 'UNQ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.unique.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Unique Subscan',
          'url' => 'https://unique.subscan.io/',
        ),
      ),
    ),
    8881 => 
    array (
      'id' => 8881,
      'name' => 'Quartz Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'QTZ',
        'symbol' => 'QTZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-quartz.unique.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Quartz Subscan',
          'url' => 'https://quartz.subscan.io/',
        ),
      ),
    ),
    8882 => 
    array (
      'id' => 8882,
      'name' => 'Opal Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OPL',
        'symbol' => 'OPL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-opal.unique.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Opal Subscan',
          'url' => 'https://opal.subscan.io/',
        ),
      ),
      'testnet' => true,
    ),
    8899 => 
    array (
      'id' => 8899,
      'name' => 'JIBCHAIN L1',
      'network' => 'jbc',
      'nativeCurrency' => 
      array (
        'name' => 'JBC',
        'symbol' => 'JBC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-l1.jibchain.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp-l1.jibchain.net',
          'apiUrl' => 'https://exp-l1.jibchain.net/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xc0C8C486D1466C57Efe13C2bf000d4c56F47CBdC',
          'blockCreated' => 2299048,
        ),
      ),
      'testnet' => false,
    ),
    9000 => 
    array (
      'id' => 9000,
      'name' => 'Evmos Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Evmos',
        'symbol' => 'EVMOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.bd.evmos.dev:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Evmos Testnet Block Explorer',
          'url' => 'https://evm.evmos.dev/',
        ),
      ),
    ),
    9001 => 
    array (
      'id' => 9001,
      'name' => 'Evmos',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Evmos',
        'symbol' => 'EVMOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://eth.bd.evmos.org:8545',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Evmos Block Explorer',
          'url' => 'https://escan.live',
        ),
      ),
    ),
    9496 => 
    array (
      'id' => 9496,
      'name' => 'WeaveVM Alphanet',
      'nativeCurrency' => 
      array (
        'name' => 'Testnet WeaveVM',
        'symbol' => 'tWVM',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.wvm.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'WeaveVM Alphanet Explorer',
          'url' => 'https://explorer.wvm.dev',
        ),
      ),
      'testnet' => true,
    ),
    9700 => 
    array (
      'id' => 9700,
      'name' => 'OORT MainnetDev',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'OORT',
        'symbol' => 'OORT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dev-rpc.oortech.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'OORT MainnetDev Explorer',
          'url' => 'https://dev-scan.oortech.com',
        ),
      ),
    ),
    10200 => 
    array (
      'id' => 10200,
      'name' => 'Gnosis Chiado',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Gnosis',
        'symbol' => 'xDAI',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.chiadochain.net',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.chiadochain.net/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.chiadochain.net',
          'apiUrl' => 'https://blockscout.chiadochain.net/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 4967313,
        ),
      ),
      'testnet' => true,
    ),
    11011 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1,
        ),
      ),
      'id' => 11011,
      'name' => 'Shape Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.shape.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer-sepolia.shape.network/',
          'apiUrl' => 'https://explorer-sepolia.shape.network/api/v2',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    11124 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 11124,
      'name' => 'Abstract Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.testnet.abs.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Abstract Block Explorer',
          'url' => 'https://explorer.testnet.abs.xyz',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
          'blockCreated' => 358349,
        ),
        'universalSignatureVerifier' => 
        array (
          'address' => '0xfB688330379976DA81eB64Fe4BF50d7401763B9C',
          'blockCreated' => 431682,
        ),
      ),
    ),
    11235 => 
    array (
      'id' => 11235,
      'name' => 'HAQQ Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Islamic Coin',
        'symbol' => 'ISLM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.eth.haqq.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HAQQ Explorer',
          'url' => 'https://explorer.haqq.network',
          'apiUrl' => 'https://explorer.haqq.network/api',
        ),
      ),
    ),
    11501 => 
    array (
      'id' => 11501,
      'name' => 'BEVM Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet-1.bevm.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bevmscan',
          'url' => 'https://scan-mainnet.bevm.io',
          'apiUrl' => 'https://scan-mainnet-api.bevm.io/api',
        ),
      ),
    ),
    11822 => 
    array (
      'id' => 11822,
      'name' => 'Artela Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'ART',
        'symbol' => 'ART',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://betanet-rpc1.artela.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Artela',
          'url' => 'https://betanet-scan.artela.network',
          'apiUrl' => 'https://betanet-scan.artela.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xd07c8635f76e8745Ee7092fbb6e8fbc5FeF09DD7',
          'blockCreated' => 7001871,
        ),
      ),
      'testnet' => true,
    ),
    12306 => 
    array (
      'id' => 12306,
      'name' => 'Fibo Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'fibo',
        'symbol' => 'FIBO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://network.hzroc.art',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FiboScan',
          'url' => 'https://scan.fibochain.org',
        ),
      ),
    ),
    12324 => 
    array (
      'id' => 12324,
      'name' => 'L3X Protocol',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet.l3x.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-mainnet.l3x.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'L3X Mainnet Explorer',
          'url' => 'https://explorer.l3x.com',
          'apiUrl' => 'https://explorer.l3x.com/api/v2',
        ),
      ),
      'testnet' => false,
    ),
    12325 => 
    array (
      'id' => 12325,
      'name' => 'L3X Protocol Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.l3x.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-testnet.l3x.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'L3X Testnet Explorer',
          'url' => 'https://explorer-testnet.l3x.com',
          'apiUrl' => 'https://explorer-testnet.l3x.com/api/v2',
        ),
      ),
      'testnet' => true,
    ),
    12553 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xE6f24d2C32B3109B18ed33cF08eFb490b1e09C10',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14193,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x6A12432491bbbE8d3babf75F759766774C778Db4',
            'blockCreated' => 19387057,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x4cbab69108Aa72151EDa5A3c164eA86845f18438',
          ),
        ),
      ),
      'id' => 12553,
      'name' => 'RSS3 VSL Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'RSS3',
        'symbol' => 'RSS3',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.rss3.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RSS3 VSL Mainnet Scan',
          'url' => 'https://scan.rss3.io',
          'apiUrl' => 'https://scan.rss3.io/api',
        ),
      ),
      'sourceId' => 1,
    ),
    13001 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0x206a75d89d45F146C54020F132FF93bEDD09f55E',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x60e3A368a4cdCEf85ffB964e372726F56A46221e',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xb5afdd0E8dDF081Ef90e8A3e0c7b5798e66E954E',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xbd37E1a59D4C00C9A46F75018dffd84061bC5f74',
          ),
        ),
      ),
      'id' => 13001,
      'network' => 'snaxchain-testnet',
      'name' => 'SnaxChain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.snaxchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Snax Explorer',
          'url' => 'https://testnet-explorer.snaxchain.io',
          'apiUrl' => 'https://testnet-explorer.snaxchain.io/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    13337 => 
    array (
      'id' => 13337,
      'name' => 'Beam Testnet',
      'network' => 'beam',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Beam',
        'symbol' => 'BEAM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://build.onbeam.com/rpc/testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://build.onbeam.com/ws/testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Beam Explorer',
          'url' => 'https://subnets-test.avax.network/beam',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x9bf49b704ee2a095b95c1f2d4eb9010510c41c9e',
          'blockCreated' => 3,
        ),
      ),
      'testnet' => true,
    ),
    13370 => 
    array (
      'id' => 13370,
      'name' => 'Cannon',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    13371 => 
    array (
      'id' => 13371,
      'name' => 'Immutable zkEVM',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Immutable Coin',
        'symbol' => 'IMX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.immutable.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Immutable Explorer',
          'url' => 'https://explorer.immutable.com',
          'apiUrl' => 'https://explorer.immutable.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x236bdA4589e44e6850f5aC6a74BfCa398a86c6c0',
          'blockCreated' => 4335972,
        ),
      ),
    ),
    13381 => 
    array (
      'id' => 13381,
      'name' => 'Phoenix Blockchain',
      'nativeCurrency' => 
      array (
        'name' => 'Phoenix',
        'symbol' => 'PHX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.phoenixplorer.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Phoenixplorer',
          'url' => 'https://phoenixplorer.com',
          'apiUrl' => 'https://phoenixplorer.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x498cF757a575cFF2c2Ed9f532f56Efa797f86442',
          'blockCreated' => 5620192,
        ),
      ),
    ),
    13473 => 
    array (
      'id' => 13473,
      'name' => 'Immutable zkEVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Immutable Coin',
        'symbol' => 'IMX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.immutable.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Immutable Testnet Explorer',
          'url' => 'https://explorer.testnet.immutable.com/',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x2CC787Ed364600B0222361C4188308Fa8E68bA60',
          'blockCreated' => 5977391,
        ),
      ),
      'testnet' => true,
    ),
    15551 => 
    array (
      'id' => 15551,
      'name' => 'LoopNetwork Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'LOOP',
        'symbol' => 'LOOP',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.mainnetloop.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'LoopNetwork Blockchain Explorer',
          'url' => 'https://explorer.mainnetloop.com/',
        ),
      ),
      'testnet' => false,
    ),
    15557 => 
    array (
      'id' => 15557,
      'name' => 'EOS EVM Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EOS',
        'symbol' => 'EOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.testnet.evm.eosnetwork.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'EOS EVM Testnet Explorer',
          'url' => 'https://explorer.testnet.evm.eosnetwork.com',
          'apiUrl' => 'https://explorer.testnet.evm.eosnetwork.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 9067940,
        ),
      ),
      'testnet' => true,
    ),
    17000 => 
    array (
      'id' => 17000,
      'name' => 'Holesky',
      'nativeCurrency' => 
      array (
        'name' => 'Holesky Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://ethereum-holesky-rpc.publicnode.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://holesky.etherscan.io',
          'apiUrl' => 'https://api-holesky.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 77,
        ),
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
          'blockCreated' => 801613,
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xa6AC935D4971E3CD133b950aE053bECD16fE7f3b',
          'blockCreated' => 973484,
        ),
      ),
      'testnet' => true,
    ),
    17069 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
        ),
        'portal' => 
        array (
          17000 => 
          array (
            'address' => '0x57ee40586fbE286AfC75E67cb69511A6D9aF5909',
            'blockCreated' => 1274684,
          ),
        ),
        'l2OutputOracle' => 
        array (
          17000 => 
          array (
            'address' => '0xCb8E7AC561b8EF04F2a15865e9fbc0766FEF569B',
            'blockCreated' => 1274684,
          ),
        ),
        'l1StandardBridge' => 
        array (
          17000 => 
          array (
            'address' => '0x09bcDd311FE398F80a78BE37E489f5D440DB95DE',
            'blockCreated' => 1274684,
          ),
        ),
      ),
      'name' => 'Garnet Testnet',
      'testnet' => true,
      'id' => 17069,
      'sourceId' => 17000,
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.garnetchain.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.garnetchain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.garnetchain.com',
        ),
      ),
    ),
    17777 => 
    array (
      'id' => 17777,
      'name' => 'EOS EVM',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'EOS',
        'symbol' => 'EOS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.evm.eosnetwork.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'EOS EVM Explorer',
          'url' => 'https://explorer.evm.eosnetwork.com',
          'apiUrl' => 'https://explorer.evm.eosnetwork.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 7943933,
        ),
      ),
    ),
    18233 => 
    array (
      'id' => 18233,
      'name' => 'Unreal',
      'nativeCurrency' => 
      array (
        'name' => 'reETH',
        'decimals' => 18,
        'symbol' => 'reETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.unreal-orbit.gelato.digital',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Unreal Explorer',
          'url' => 'https://unreal.blockscout.com',
          'apiUrl' => 'https://unreal.blockscout.com/api/v2',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x8b6B0e60D8CD84898Ea8b981065A12F876eA5677',
          'blockCreated' => 1745,
        ),
      ),
    ),
    22222 => 
    array (
      'id' => 22222,
      'name' => 'Nautilus Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'ZBC',
        'symbol' => 'ZBC',
        'decimals' => 9,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.nautilus.nautchain.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'NautScan',
          'url' => 'https://nautscan.com',
        ),
      ),
    ),
    22776 => 
    array (
      'id' => 22776,
      'name' => 'MAP Protocol',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'MAPO',
        'symbol' => 'MAPO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.maplabs.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'MAPO Scan',
          'url' => 'https://maposcan.io',
        ),
      ),
      'testnet' => false,
    ),
    23294 => 
    array (
      'id' => 23294,
      'name' => 'Oasis Sapphire',
      'network' => 'sapphire',
      'nativeCurrency' => 
      array (
        'name' => 'Sapphire Rose',
        'symbol' => 'ROSE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sapphire.oasis.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sapphire.oasis.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Oasis Explorer',
          'url' => 'https://explorer.oasis.io/mainnet/sapphire',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 734531,
        ),
      ),
    ),
    23295 => 
    array (
      'id' => 23295,
      'name' => 'Oasis Sapphire Testnet',
      'network' => 'sapphire-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sapphire Test Rose',
        'symbol' => 'TEST',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.sapphire.oasis.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.sapphire.oasis.dev/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Oasis Explorer',
          'url' => 'https://explorer.oasis.io/testnet/sapphire',
        ),
      ),
      'testnet' => true,
    ),
    23451 => 
    array (
      'id' => 23451,
      'name' => 'DreyerX Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'DreyerX',
        'symbol' => 'DRX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.dreyerx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DreyerX Scan',
          'url' => 'https://scan.dreyerx.com',
        ),
      ),
    ),
    23452 => 
    array (
      'id' => 23452,
      'name' => 'DreyerX Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'DreyerX',
        'symbol' => 'DRX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://testnet-rpc.dreyerx.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DreyerX Testnet Scan',
          'url' => 'https://testnet-scan.dreyerx.com',
        ),
      ),
      'testnet' => true,
    ),
    25925 => 
    array (
      'id' => 25925,
      'name' => 'Bitkub Testnet',
      'network' => 'Bitkub Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitkub Test',
        'symbol' => 'tKUB',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.bitkubchain.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitkub Chain Testnet Explorer',
          'url' => 'https://testnet.bkcscan.com',
          'apiUrl' => 'https://testnet.bkcscan.com/api',
        ),
      ),
      'testnet' => true,
    ),
    28882 => 
    array (
      'id' => 28882,
      'name' => 'Boba Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.boba.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOBAScan',
          'url' => 'https://testnet.bobascan.com',
        ),
      ),
      'testnet' => true,
    ),
    29112 => 
    array (
      'id' => 29112,
      'name' => 'HYCHAIN Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'HYTOPIA',
        'symbol' => 'TOPIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.hychain.com/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HYCHAIN Explorer',
          'url' => 'https://testnet-rpc.hychain.com/http',
        ),
      ),
      'testnet' => true,
    ),
    31337 => 
    array (
      'id' => 31337,
      'name' => 'Hardhat',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://127.0.0.1:8545',
          ),
        ),
      ),
    ),
    32659 => 
    array (
      'id' => 32659,
      'name' => 'Fusion Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Fusion',
        'symbol' => 'FSN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.fusionnetwork.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.fusionnetwork.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FSNscan',
          'url' => 'https://fsnscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 10441605,
        ),
      ),
      'testnet' => false,
    ),
    32769 => 
    array (
      'id' => 32769,
      'name' => 'Zilliqa',
      'network' => 'zilliqa',
      'nativeCurrency' => 
      array (
        'name' => 'Zilliqa',
        'symbol' => 'ZIL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.zilliqa.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ethernal',
          'url' => 'https://evmx.zilliqa.com',
        ),
      ),
      'testnet' => false,
    ),
    33101 => 
    array (
      'id' => 33101,
      'name' => 'Zilliqa Testnet',
      'network' => 'zilliqa-testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Zilliqa',
        'symbol' => 'ZIL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dev-api.zilliqa.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ethernal',
          'url' => 'https://evmx.testnet.zilliqa.com',
        ),
      ),
      'testnet' => true,
    ),
    33111 => 
    array (
      'id' => 33111,
      'name' => 'Curtis',
      'nativeCurrency' => 
      array (
        'name' => 'ApeCoin',
        'symbol' => 'APE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.curtis.apechain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Curtis Explorer',
          'url' => 'https://explorer.curtis.apechain.com',
        ),
      ),
      'testnet' => true,
    ),
    33979 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 33979,
      'name' => 'Funki',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet.funkichain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Funki Mainnet Explorer',
          'url' => 'https://funkiscan.io',
        ),
      ),
      'sourceId' => 1,
    ),
    34443 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 2465882,
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x4317ba146D4933D889518a3e5E11Fe7a53199b04',
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x8B34b14c7c7123459Cf3076b8Cb929BE097d0C07',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x735aDBbE72226BD52e818E7181953f42E3b0FF21',
          ),
        ),
      ),
      'id' => 34443,
      'name' => 'Mode Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.mode.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Modescan',
          'url' => 'https://modescan.io',
        ),
      ),
      'sourceId' => 1,
    ),
    35441 => 
    array (
      'id' => 35441,
      'name' => 'Q Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Q',
        'symbol' => 'Q',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.q.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Q Mainnet Explorer',
          'url' => 'https://explorer.q.org',
          'apiUrl' => 'https://explorer.q.org/api',
        ),
      ),
    ),
    35443 => 
    array (
      'id' => 35443,
      'name' => 'Q Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Q',
        'symbol' => 'Q',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.qtestnet.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Q Testnet Explorer',
          'url' => 'https://explorer.qtestnet.org',
          'apiUrl' => 'https://explorer.qtestnet.org/api',
        ),
      ),
      'testnet' => true,
    ),
    42161 => 
    array (
      'id' => 42161,
      'name' => 'Arbitrum One',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://arb1.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://arbiscan.io',
          'apiUrl' => 'https://api.arbiscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 7654707,
        ),
      ),
    ),
    42170 => 
    array (
      'id' => 42170,
      'name' => 'Arbitrum Nova',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://nova.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://nova.arbiscan.io',
          'apiUrl' => 'https://api-nova.arbiscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1746963,
        ),
      ),
    ),
    42220 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionRequest' => 
        array (
          'type' => 'transactionRequest',
        ),
      ),
      'fees' => 
      array (
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 13112599,
        ),
      ),
      'id' => 42220,
      'name' => 'Celo',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CELO',
        'symbol' => 'CELO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://forno.celo.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Celo Explorer',
          'url' => 'https://celoscan.io',
          'apiUrl' => 'https://api.celoscan.io/api',
        ),
      ),
      'testnet' => false,
    ),
    42420 => 
    array (
      'id' => 42420,
      'name' => 'AssetChain Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Real World Asset',
        'symbol' => 'RWA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet-rpc.assetchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Asset Chain Explorer',
          'url' => 'https://scan.assetchain.org',
          'apiUrl' => 'https://scan.assetchain.org/api',
        ),
      ),
      'testnet' => false,
      'contracts' => 
      array (
      ),
    ),
    42421 => 
    array (
      'id' => 42421,
      'name' => 'AssetChain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Real World Asset',
        'symbol' => 'RWA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://enugu-rpc.assetchain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Asset Chain Testnet Explorer',
          'url' => 'https://scan-testnet.assetchain.org',
          'apiUrl' => 'https://scan-testnet.assetchain.org/api',
        ),
      ),
      'testnet' => true,
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x989F832D35988cb5e3eB001Fa2Fe789469EC31Ea',
          'blockCreated' => 17177,
        ),
      ),
    ),
    42766 => 
    array (
      'id' => 42766,
      'name' => 'ZKFair Mainnet',
      'network' => 'zkfair-mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'USD Coin',
        'symbol' => 'USDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zkfair.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkFair Explorer',
          'url' => 'https://scan.zkfair.io',
          'apiUrl' => 'https://scan.zkfair.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 6090959,
        ),
      ),
      'testnet' => false,
    ),
    42793 => 
    array (
      'id' => 42793,
      'name' => 'Etherlink',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Tez',
        'symbol' => 'XTZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://node.mainnet.etherlink.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherlink',
          'url' => 'https://explorer.etherlink.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 33899,
        ),
      ),
    ),
    43113 => 
    array (
      'id' => 43113,
      'name' => 'Avalanche Fuji',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Avalanche Fuji',
        'symbol' => 'AVAX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.avax-test.network/ext/bc/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SnowTrace',
          'url' => 'https://testnet.snowtrace.io',
          'apiUrl' => 'https://api-testnet.snowtrace.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 7096959,
        ),
      ),
      'testnet' => true,
    ),
    43114 => 
    array (
      'id' => 43114,
      'name' => 'Avalanche',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Avalanche',
        'symbol' => 'AVAX',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.avax.network/ext/bc/C/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SnowTrace',
          'url' => 'https://snowtrace.io',
          'apiUrl' => 'https://api.snowtrace.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 11907934,
        ),
      ),
    ),
    43851 => 
    array (
      'id' => 43851,
      'name' => 'ZKFair Testnet',
      'network' => 'zkfair-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'USD Coin',
        'symbol' => 'USDC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.zkfair.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkFair Explorer',
          'url' => 'https://testnet-scan.zkfair.io',
        ),
      ),
      'testnet' => true,
    ),
    44787 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionRequest' => 
        array (
          'type' => 'transactionRequest',
        ),
      ),
      'fees' => 
      array (
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 14569001,
        ),
        'portal' => 
        array (
          17000 => 
          array (
            'address' => '0x82527353927d8D069b3B452904c942dA149BA381',
            'blockCreated' => 2411324,
          ),
        ),
        'disputeGameFactory' => 
        array (
          17000 => 
          array (
            'address' => '0xE28AAdcd9883746c0e5068F58f9ea06027b214cb',
            'blockCreated' => 2411324,
          ),
        ),
        'l2OutputOracle' => 
        array (
          17000 => 
          array (
            'address' => '0x4a2635e9e4f6e45817b1D402ac4904c1d1752438',
            'blockCreated' => 2411324,
          ),
        ),
        'l1StandardBridge' => 
        array (
          17000 => 
          array (
            'address' => '0xD1B0E0581973c9eB7f886967A606b9441A897037',
            'blockCreated' => 2411324,
          ),
        ),
      ),
      'id' => 44787,
      'name' => 'Alfajores',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CELO',
        'symbol' => 'A-CELO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://alfajores-forno.celo-testnet.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Celo Alfajores Explorer',
          'url' => 'https://celo-alfajores.blockscout.com',
          'apiUrl' => 'https://celo-alfajores.blockscout.com/api',
        ),
      ),
      'testnet' => true,
    ),
    46688 => 
    array (
      'id' => 46688,
      'name' => 'Fusion Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Fusion',
        'symbol' => 'FSN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.fusionnetwork.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.fusionnetwork.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'FSNscan',
          'url' => 'https://testnet.fsnscan.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 10428309,
        ),
      ),
      'testnet' => true,
    ),
    48899 => 
    array (
      'id' => 48899,
      'name' => 'Zircuit Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'ETH',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zircuit1-testnet.p2pify.com',
            1 => 'https://zircuit1-testnet.liquify.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zircuit Testnet Explorer',
          'url' => 'https://explorer.testnet.zircuit.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 6040287,
        ),
      ),
      'testnet' => true,
    ),
    48900 => 
    array (
      'id' => 48900,
      'name' => 'Zircuit Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://zircuit1-mainnet.p2pify.com',
            1 => 'https://zircuit1-mainnet.liquify.com',
            2 => 'https://zircuit-mainnet.drpc.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zircuit Explorer',
          'url' => 'https://explorer.zircuit.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
        ),
      ),
      'testnet' => false,
    ),
    50005 => 
    array (
      'id' => 50005,
      'name' => 'Yooldo Verse',
      'nativeCurrency' => 
      array (
        'name' => 'OAS',
        'symbol' => 'OAS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.yooldo-verse.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Yooldo Verse Explorer',
          'url' => 'https://explorer.yooldo-verse.xyz',
        ),
      ),
    ),
    50006 => 
    array (
      'id' => 50006,
      'name' => 'Yooldo Verse Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'OAS',
        'symbol' => 'OAS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.yooldo-verse.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Yooldo Verse Testnet Explorer',
          'url' => 'https://explorer.testnet.yooldo-verse.xyz',
        ),
      ),
      'testnet' => true,
    ),
    52014 => 
    array (
      'id' => 52014,
      'name' => 'Electroneum Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'ETN',
        'symbol' => 'ETN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.electroneum.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Electroneum Block Explorer',
          'url' => 'https://blockexplorer.electroneum.com',
        ),
      ),
      'testnet' => false,
    ),
    53457 => 
    array (
      'id' => 53457,
      'name' => 'DODOchain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'DODO',
        'symbol' => 'DODO',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dodochain-testnet.alt.technology',
          ),
          'webSocket' => 
          array (
            0 => 'wss://dodochain-testnet.alt.technology/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DODOchain Testnet (Sepolia) Explorer',
          'url' => 'https://testnet-scan.dodochain.com',
        ),
      ),
      'testnet' => true,
    ),
    53935 => 
    array (
      'id' => 53935,
      'name' => 'DFK Chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Jewel',
        'symbol' => 'JEWEL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://subnets.avax.network/defi-kingdoms/dfk-chain/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'DFKSubnetScan',
          'url' => 'https://subnets.avax.network/defi-kingdoms',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14790551,
        ),
      ),
    ),
    54211 => 
    array (
      'id' => 54211,
      'name' => 'HAQQ Testedge 2',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Islamic Coin',
        'symbol' => 'ISLMT',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.eth.testedge2.haqq.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'HAQQ Explorer',
          'url' => 'https://explorer.testedge2.haqq.network',
          'apiUrl' => 'https://explorer.testedge2.haqq.network/api',
        ),
      ),
    ),
    55244 => 
    array (
      'id' => 55244,
      'name' => 'Superposition',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.superposition.so',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Superposition Explorer',
          'url' => 'https://explorer.superposition.so',
        ),
      ),
      'testnet' => false,
    ),
    57000 => 
    array (
      'id' => 57000,
      'name' => 'Rollux Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Syscoin',
        'symbol' => 'SYS',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-tanenbaum.rollux.com/',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc-tanenbaum.rollux.com/wss',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'RolluxTestnetExplorer',
          'url' => 'https://rollux.tanenbaum.io',
          'apiUrl' => 'https://rollux.tanenbaum.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 1813675,
        ),
      ),
    ),
    58008 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'id' => 58008,
      'network' => 'pgn-testnet',
      'name' => 'PGN ',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.publicgoods.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PGN Testnet Explorer',
          'url' => 'https://explorer.sepolia.publicgoods.network',
          'apiUrl' => 'https://explorer.sepolia.publicgoods.network/api',
        ),
      ),
      'contracts' => 
      array (
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0xD5bAc3152ffC25318F848B3DD5dA6C85171BaEEe',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xF04BdD5353Bb0EFF6CA60CfcC78594278eBfE179',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xFaE6abCAF30D23e233AC7faF747F2fC3a5a6Bfa3',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3754925,
        ),
      ),
      'sourceId' => 11155111,
      'testnet' => true,
    ),
    59140 => 
    array (
      'id' => 59140,
      'name' => 'Linea Goerli Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.goerli.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.goerli.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://goerli.lineascan.build',
          'apiUrl' => 'https://goerli.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 498623,
        ),
      ),
      'testnet' => true,
    ),
    59141 => 
    array (
      'fees' => 
      array (
      ),
      'id' => 59141,
      'name' => 'Linea Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sepolia.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.sepolia.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia.lineascan.build',
          'apiUrl' => 'https://api-sepolia.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 227427,
        ),
      ),
      'testnet' => true,
    ),
    59144 => 
    array (
      'fees' => 
      array (
      ),
      'id' => 59144,
      'name' => 'Linea Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Linea Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.linea.build',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.linea.build',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://lineascan.build',
          'apiUrl' => 'https://api.lineascan.build/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 42,
        ),
      ),
      'testnet' => false,
    ),
    60808 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 23131,
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xdDa53E23f8a32640b04D7256e651C1db98dB11C1',
            'blockCreated' => 4462615,
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x8AdeE124447435fE03e3CD24dF3f4cAE32E65a3E',
            'blockCreated' => 4462615,
          ),
        ),
      ),
      'id' => 60808,
      'name' => 'BOB',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.gobob.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.gobob.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOB Explorer',
          'url' => 'https://explorer.gobob.xyz',
        ),
      ),
      'sourceId' => 1,
    ),
    62049 => 
    array (
      'id' => 62049,
      'name' => 'Optopia Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-testnet.optopia.ai',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Optopia Explorer',
          'url' => 'https://scan-testnet.optopia.ai',
        ),
      ),
      'testnet' => true,
    ),
    62050 => 
    array (
      'id' => 62050,
      'name' => 'Optopia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-mainnet.optopia.ai',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Optopia Explorer',
          'url' => 'https://scan.optopia.ai',
        ),
      ),
      'testnet' => false,
    ),
    64240 => 
    array (
      'id' => 64240,
      'name' => 'Fantom Sonic Open Testnet',
      'network' => 'fantom-sonic-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Fantom',
        'symbol' => 'FTM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcapi.sonic.fantom.network',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Fantom Sonic Open Testnet Explorer',
          'url' => 'https://public-sonic.fantom.network',
        ),
      ),
      'testnet' => true,
    ),
    80001 => 
    array (
      'id' => 80001,
      'name' => 'Polygon Mumbai',
      'nativeCurrency' => 
      array (
        'name' => 'MATIC',
        'symbol' => 'MATIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/polygon_mumbai',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://mumbai.polygonscan.com',
          'apiUrl' => 'https://api-testnet.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 25770160,
        ),
      ),
      'testnet' => true,
    ),
    80002 => 
    array (
      'id' => 80002,
      'name' => 'Polygon Amoy',
      'nativeCurrency' => 
      array (
        'name' => 'MATIC',
        'symbol' => 'MATIC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-amoy.polygon.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PolygonScan',
          'url' => 'https://amoy.polygonscan.com',
          'apiUrl' => 'https://api-amoy.polygonscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 3127388,
        ),
      ),
      'testnet' => true,
    ),
    80084 => 
    array (
      'id' => 80084,
      'name' => 'Berachain bArtio',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BERA Token',
        'symbol' => 'BERA',
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 109269,
        ),
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://bartio.rpc.berachain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Berachain bArtio Beratrail',
          'url' => 'https://bartio.beratrail.io',
        ),
      ),
      'testnet' => true,
    ),
    80085 => 
    array (
      'id' => 80085,
      'name' => 'Berachain Artio',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BERA Token',
        'symbol' => 'BERA',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://artio.rpc.berachain.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Berachain',
          'url' => 'https://artio.beratrail.io',
        ),
      ),
      'testnet' => true,
    ),
    81457 => 
    array (
      'id' => 81457,
      'name' => 'Blast',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.blast.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blastscan',
          'url' => 'https://blastscan.io',
          'apiUrl' => 'https://api.blastscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 212929,
        ),
      ),
      'sourceId' => 1,
    ),
    84531 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          5 => 
          array (
            'address' => '0x2A35891ff30313CcFa6CE88dcf3858bb075A2298',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1376988,
        ),
        'portal' => 
        array (
          5 => 
          array (
            'address' => '0xe93c8cD0D409341205A592f8c4Ac1A5fe5585cfA',
          ),
        ),
        'l1StandardBridge' => 
        array (
          5 => 
          array (
            'address' => '0xfA6D8Ee5BE770F84FC001D098C4bD604Fe01284a',
          ),
        ),
      ),
      'id' => 84531,
      'name' => 'Base Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli.base.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Basescan',
          'url' => 'https://goerli.basescan.org',
          'apiUrl' => 'https://goerli.basescan.org/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 5,
    ),
    84532 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0xd6E6dBf4F7EA0ac412fD8b65ED297e64BB7a06E1',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x84457ca9D0163FbC4bbfe4Dfbb20ba46e48DF254',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x49f53e41452c74589e85ca1677426ba426459e85',
            'blockCreated' => 4446677,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xfd0Bf71F60660E2f608ed56e1659C450eB113120',
            'blockCreated' => 4446677,
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1059647,
        ),
      ),
      'id' => 84532,
      'network' => 'base-sepolia',
      'name' => 'Base Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.base.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Basescan',
          'url' => 'https://sepolia.basescan.org',
          'apiUrl' => 'https://api-sepolia.basescan.org/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    88882 => 
    array (
      'id' => 88882,
      'name' => 'Chiliz Spicy Testnet',
      'network' => 'chiliz-spicy-Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CHZ',
        'symbol' => 'CHZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://spicy-rpc.chiliz.com',
            1 => 'https://chiliz-spicy-rpc.publicnode.com',
          ),
          'webSocket' => 
          array (
            0 => 'wss://spicy-rpc-ws.chiliz.com',
            1 => 'wss://chiliz-spicy-rpc.publicnode.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chiliz Explorer',
          'url' => 'http://spicy-explorer.chiliz.com',
          'apiUrl' => 'http://spicy-explorer.chiliz.com/api',
        ),
      ),
      'testnet' => true,
    ),
    88888 => 
    array (
      'id' => 88888,
      'name' => 'Chiliz Chain',
      'network' => 'chiliz-chain',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'CHZ',
        'symbol' => 'CHZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/chiliz',
            1 => 'https://chiliz-rpc.publicnode.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chiliz Explorer',
          'url' => 'https://scan.chiliz.com',
          'apiUrl' => 'https://scan.chiliz.com/api',
        ),
      ),
    ),
    88991 => 
    array (
      'id' => 88991,
      'name' => 'Jibchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'tJBC',
        'symbol' => 'tJBC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.jibchain.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://exp.testnet.jibchain.net',
          'apiUrl' => 'https://exp.testnet.jibchain.net/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xa1a858ad9041B4741e620355a3F96B3c78e70ecE',
          'blockCreated' => 32848,
        ),
      ),
      'testnet' => true,
    ),
    100009 => 
    array (
      'id' => 100009,
      'name' => 'Vechain',
      'nativeCurrency' => 
      array (
        'name' => 'VeChain',
        'symbol' => 'VET',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.vechain.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Vechain Explorer',
          'url' => 'https://explore.vechain.org',
        ),
        'vechainStats' => 
        array (
          'name' => 'Vechain Stats',
          'url' => 'https://vechainstats.com',
        ),
      ),
    ),
    105105 => 
    array (
      'id' => 105105,
      'name' => 'Stratis Mainnet',
      'network' => 'stratis',
      'nativeCurrency' => 
      array (
        'name' => 'Stratis',
        'symbol' => 'STRAX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.stratisevm.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Stratis Explorer',
          'url' => 'https://explorer.stratisevm.com',
        ),
      ),
    ),
    111188 => 
    array (
      'id' => 111188,
      'name' => 're.al',
      'nativeCurrency' => 
      array (
        'name' => 'reETH',
        'decimals' => 18,
        'symbol' => 'reETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://real.drpc.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 're.al Explorer',
          'url' => 'https://explorer.re.al',
          'apiUrl' => 'https://explorer.re.al/api/v2',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 695,
        ),
      ),
    ),
    128123 => 
    array (
      'id' => 128123,
      'name' => 'Etherlink Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Tez',
        'symbol' => 'XTZ',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://node.ghostnet.etherlink.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherlink Testnet',
          'url' => 'https://testnet-explorer.etherlink.com',
        ),
      ),
      'testnet' => true,
    ),
    167000 => 
    array (
      'id' => 167000,
      'name' => 'Taiko Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.taiko.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.mainnet.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taikoscan',
          'url' => 'https://taikoscan.io',
          'apiUrl' => 'https://api.taikoscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcb2436774C3e191c85056d248EF4260ce5f27A9D',
        ),
      ),
    ),
    167005 => 
    array (
      'id' => 167005,
      'name' => 'Taiko (Alpha-3 Testnet)',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.test.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.test.taiko.xyz',
        ),
      ),
    ),
    167007 => 
    array (
      'id' => 167007,
      'name' => 'Taiko Jolnir (Alpha-5 Testnet)',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.jolnir.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.jolnir.taiko.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 732706,
        ),
      ),
      'testnet' => true,
    ),
    167008 => 
    array (
      'id' => 167008,
      'name' => 'Taiko Katla (Alpha-6 Testnet)',
      'network' => 'tko-katla',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.katla.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'blockscout',
          'url' => 'https://explorer.katla.taiko.xyz',
        ),
      ),
    ),
    167009 => 
    array (
      'id' => 167009,
      'name' => 'Taiko Hekla L2',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.hekla.taiko.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Taikoscan',
          'url' => 'https://hekla.taikoscan.network',
        ),
      ),
      'testnet' => true,
    ),
    200810 => 
    array (
      'id' => 200810,
      'name' => 'Bitlayer Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.bitlayer.org',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-ws.bitlayer.org',
            1 => 'wss://testnet-ws.bitlayer-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitlayer(BTR) Scan',
          'url' => 'https://testnet.btrscan.com',
        ),
      ),
      'testnet' => true,
    ),
    200901 => 
    array (
      'id' => 200901,
      'name' => 'Bitlayer',
      'nativeCurrency' => 
      array (
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.bitlayer.org',
            1 => 'https://rpc.bitlayer-rpc.com',
            2 => 'https://rpc.ankr.com/bitlayer',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.bitlayer.org',
            1 => 'wss://ws.bitlayer-rpc.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Bitlayer(BTR) Scan',
          'url' => 'https://www.btrscan.com',
        ),
      ),
    ),
    205205 => 
    array (
      'id' => 205205,
      'name' => 'Auroria Testnet',
      'network' => 'auroria',
      'nativeCurrency' => 
      array (
        'name' => 'Auroria Stratis',
        'symbol' => 'tSTRAX',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://auroria.rpc.stratisevm.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Auroria Testnet Explorer',
          'url' => 'https://auroria.explorer.stratisevm.com',
        ),
      ),
      'testnet' => true,
    ),
    314159 => 
    array (
      'id' => 314159,
      'name' => 'Filecoin Calibration',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'testnet filecoin',
        'symbol' => 'tFIL',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.calibration.node.glif.io/rpc/v1',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Filscan',
          'url' => 'https://calibration.filscan.io',
        ),
      ),
      'testnet' => true,
    ),
    421613 => 
    array (
      'id' => 421613,
      'name' => 'Arbitrum Goerli',
      'nativeCurrency' => 
      array (
        'name' => 'Arbitrum Goerli Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://goerli-rollup.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://goerli.arbiscan.io',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 88114,
        ),
      ),
      'testnet' => true,
    ),
    421614 => 
    array (
      'id' => 421614,
      'name' => 'Arbitrum Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Arbitrum Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rollup.arbitrum.io/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Arbiscan',
          'url' => 'https://sepolia.arbiscan.io',
          'apiUrl' => 'https://api-sepolia.arbiscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 81930,
        ),
      ),
      'testnet' => true,
    ),
    534351 => 
    array (
      'id' => 534351,
      'name' => 'Scroll Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rpc.scroll.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Scrollscan',
          'url' => 'https://sepolia.scrollscan.com',
          'apiUrl' => 'https://api-sepolia.scrollscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 9473,
        ),
      ),
      'testnet' => true,
    ),
    534352 => 
    array (
      'id' => 534352,
      'name' => 'Scroll',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.scroll.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://wss-rpc.scroll.io/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Scrollscan',
          'url' => 'https://scrollscan.com',
          'apiUrl' => 'https://api.scrollscan.com/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 14,
        ),
      ),
      'testnet' => false,
    ),
    641230 => 
    array (
      'id' => 641230,
      'name' => 'Bear Network Chain Mainnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'BearNetworkChain',
        'symbol' => 'BRNKC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://brnkc-mainnet.bearnetwork.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BrnkScan',
          'url' => 'https://brnkscan.bearnetwork.net',
          'apiUrl' => 'https://brnkscan.bearnetwork.net/api',
        ),
      ),
    ),
    660279 => 
    array (
      'id' => 660279,
      'name' => 'Xai Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Xai',
        'symbol' => 'XAI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://xai-chain.net/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://explorer.xai-chain.net',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 222549,
        ),
      ),
      'testnet' => false,
    ),
    666666 => 
    array (
      'id' => 666666,
      'name' => 'Vision Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'VISION',
        'symbol' => 'VS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://vpioneer.infragrid.v.network/ethereum/compatible',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Vision Scan',
          'url' => 'https://visionscan.org/?chain=vpioneer',
        ),
      ),
      'testnet' => true,
    ),
    713715 => 
    array (
      'id' => 713715,
      'name' => 'Sei Devnet',
      'nativeCurrency' => 
      array (
        'name' => 'Sei',
        'symbol' => 'SEI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://evm-rpc-arctic-1.sei-apis.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Seitrace',
          'url' => 'https://seitrace.com',
        ),
      ),
      'testnet' => true,
    ),
    743111 => 
    array (
      'id' => 743111,
      'name' => 'Hemi Sepolia',
      'network' => 'Hemi Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.rpc.hemi.network/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Hemi Sepolia explorer',
          'url' => 'https://testnet.explorer.hemi.xyz',
        ),
      ),
      'testnet' => true,
    ),
    751230 => 
    array (
      'id' => 751230,
      'name' => 'Bear Network Chain Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'tBRNKC',
        'symbol' => 'tBRNKC',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://brnkc-test.bearnetwork.net',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BrnkTestScan',
          'url' => 'https://brnktest-scan.bearnetwork.net',
          'apiUrl' => 'https://brnktest-scan.bearnetwork.net/api',
        ),
      ),
      'testnet' => true,
    ),
    808813 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 35677,
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x14D0069452b4AE2b250B395b8adAb771E4267d2f',
            'blockCreated' => 4462615,
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x867B1Aa872b9C8cB5E9F7755feDC45BB24Ad0ae4',
            'blockCreated' => 4462615,
          ),
        ),
      ),
      'id' => 808813,
      'name' => 'BOB Sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://bob-sepolia.rpc.gobob.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://bob-sepolia.rpc.gobob.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'BOB Sepolia Explorer',
          'url' => 'https://bob-sepolia.explorer.gobob.xyz',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    810180 => 
    array (
      'id' => 810180,
      'name' => 'zkLink Nova',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zklink.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkLink Nova Block Explorer',
          'url' => 'https://explorer.zklink.io',
        ),
      ),
    ),
    810181 => 
    array (
      'id' => 810181,
      'name' => 'zkLink Nova Sepolia Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.rpc.zklink.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zkLink Nova Block Explorer',
          'url' => 'https://sepolia.explorer.zklink.io',
        ),
      ),
    ),
    888888 => 
    array (
      'id' => 888888,
      'name' => 'Vision',
      'nativeCurrency' => 
      array (
        'name' => 'VISION',
        'symbol' => 'VS',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://infragrid.v.network/ethereum/compatible',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Vision Scan',
          'url' => 'https://visionscan.org',
        ),
      ),
      'testnet' => false,
    ),
    911867 => 
    array (
      'id' => 911867,
      'name' => 'Odyssey Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://odyssey.ithaca.xyz',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Odyssey Explorer',
          'url' => 'https://odyssey-explorer.ithaca.xyz',
          'apiUrl' => 'https://odyssey-explorer.ithaca.xyz/api',
        ),
      ),
      'testnet' => true,
    ),
    984122 => 
    array (
      'id' => 984122,
      'name' => 'Forma',
      'network' => 'forma',
      'nativeCurrency' => 
      array (
        'symbol' => 'TIA',
        'name' => 'TIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.forma.art',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.forma.art',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Forma Explorer',
          'url' => 'https://explorer.forma.art',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xd53C6FFB123F7349A32980F87faeD8FfDc9ef079',
          'blockCreated' => 252705,
        ),
      ),
    ),
    984123 => 
    array (
      'id' => 984123,
      'name' => 'Forma Sketchpad',
      'network' => 'sketchpad',
      'nativeCurrency' => 
      array (
        'symbol' => 'TIA',
        'name' => 'TIA',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.sketchpad-1.forma.art',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.sketchpad-1.forma.art',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Sketchpad Explorer',
          'url' => 'https://explorer.sketchpad-1.forma.art',
        ),
      ),
      'testnet' => true,
    ),
    1337803 => 
    array (
      'id' => 1337803,
      'name' => 'Zhejiang',
      'nativeCurrency' => 
      array (
        'name' => 'Zhejiang Ether',
        'symbol' => 'ZhejETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zhejiang.ethpandaops.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Beaconchain',
          'url' => 'https://zhejiang.beaconcha.in',
        ),
      ),
      'testnet' => true,
    ),
    1612127 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 1612127,
      'name' => 'PlayFi Albireo Testnet',
      'network' => 'albireo',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://albireo-rpc.playfi.ai',
          ),
          'webSocket' => 
          array (
            0 => 'wss://albireo-rpc-ws.playfi.ai/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'PlayFi Albireo Explorer',
          'url' => 'https://albireo-explorer.playfi.ai',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xF9cda624FBC7e059355ce98a31693d299FACd963',
        ),
      ),
      'testnet' => true,
    ),
    3397901 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1620204,
        ),
      ),
      'id' => 3397901,
      'network' => 'funkiSepolia',
      'name' => 'Funki Sepolia Sandbox',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://funki-testnet.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Funki Sepolia Sandbox Explorer',
          'url' => 'https://sepolia-sandbox.funkichain.com/',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    3441005 => 
    array (
      'id' => 3441005,
      'name' => 'Manta Pacific Testnet',
      'network' => 'manta-testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://manta-testnet.calderachain.xyz/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Manta Testnet Explorer',
          'url' => 'https://pacific-explorer.testnet.manta.network',
          'apiUrl' => 'https://pacific-explorer.testnet.manta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x211B1643b95Fe76f11eD8880EE810ABD9A4cf56C',
          'blockCreated' => 419915,
        ),
      ),
      'testnet' => true,
    ),
    3441006 => 
    array (
      'id' => 3441006,
      'name' => 'Manta Pacific Sepolia Testnet',
      'network' => 'manta-sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://pacific-rpc.sepolia-testnet.manta.network/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Manta Sepolia Testnet Explorer',
          'url' => 'https://pacific-explorer.sepolia-testnet.manta.network',
          'apiUrl' => 'https://pacific-explorer.sepolia-testnet.manta.network/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca54918f7B525C8df894668846506767412b53E3',
          'blockCreated' => 479584,
        ),
      ),
      'testnet' => true,
    ),
    5201420 => 
    array (
      'id' => 5201420,
      'name' => 'Electroneum Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'ETN',
        'symbol' => 'ETN',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.electroneum.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Electroneum Block Explorer',
          'url' => 'https://blockexplorer.thesecurityteam.rocks',
        ),
      ),
      'testnet' => true,
    ),
    6038361 => 
    array (
      'id' => 6038361,
      'name' => 'Astar zkEVM Testnet zKyoto',
      'network' => 'zKyoto',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.startale.com/zkyoto',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'zKyoto Explorer',
          'url' => 'https://zkyoto.explorer.startale.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 196153,
        ),
      ),
      'testnet' => true,
    ),
    7777777 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0x9E6204F750cD866b299594e2aC9eA824E2e5f95c',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 5882,
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x1a0ad011913A150f69f6A19DF447A0CfD9551054',
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0x3e2Ea9B92B7E48A52296fD261dc26fd995284631',
          ),
        ),
      ),
      'id' => 7777777,
      'name' => 'Zora',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.zora.energy',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.zora.energy',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Explorer',
          'url' => 'https://explorer.zora.energy',
          'apiUrl' => 'https://explorer.zora.energy/api',
        ),
      ),
      'sourceId' => 1,
    ),
    9999999 => 
    array (
      'id' => 9999999,
      'name' => 'Fluence',
      'nativeCurrency' => 
      array (
        'name' => 'FLT',
        'symbol' => 'FLT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.mainnet.fluence.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.mainnet.fluence.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.mainnet.fluence.dev',
          'apiUrl' => 'https://blockscout.mainnet.fluence.dev/api',
        ),
      ),
    ),
    10241024 => 
    array (
      'id' => 10241024,
      'name' => 'AlienX Mainnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.alienxchain.io/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'AlienX Explorer',
          'url' => 'https://explorer.alienxchain.io',
        ),
      ),
      'testnet' => false,
    ),
    10241025 => 
    array (
      'id' => 10241025,
      'name' => 'ALIENX Hal Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://hal-rpc.alienxchain.io/http',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'AlienX Explorer',
          'url' => 'https://hal-explorer.alienxchain.io',
        ),
      ),
      'testnet' => true,
    ),
    11155111 => 
    array (
      'id' => 11155111,
      'name' => 'Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc2.sepolia.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Etherscan',
          'url' => 'https://sepolia.etherscan.io',
          'apiUrl' => 'https://api-sepolia.etherscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 751532,
        ),
        'ensRegistry' => 
        array (
          'address' => '0x00000000000C2E074eC69A0dFb2997BA6C7d2e1e',
        ),
        'ensUniversalResolver' => 
        array (
          'address' => '0xc8Af999e38273D658BE1b921b88A9Ddf005769cC',
          'blockCreated' => 5317080,
        ),
      ),
      'testnet' => true,
    ),
    11155420 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'disputeGameFactory' => 
        array (
          11155111 => 
          array (
            'address' => '0x05F9613aDB30026FFd634f38e5C4dFd30a197Fa1',
          ),
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x90E9c4f8a994a250F6aEfd61CAFb4F2e895D458F',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 1620204,
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0x16Fc5058F25648194471939df75CF27A2fdC48BC',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xFBb0621E0B23b5478B630BD55a5f21f67730B0F1',
          ),
        ),
      ),
      'id' => 11155420,
      'name' => 'OP Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.optimism.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://optimism-sepolia.blockscout.com',
          'apiUrl' => 'https://optimism-sepolia.blockscout.com/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    20241133 => 
    array (
      'id' => 20241133,
      'name' => 'Swan Proxima Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Swan Ether',
        'symbol' => 'sETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-proxima.swanchain.io	',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Swan Explorer',
          'url' => 'https://proxima-explorer.swanchain.io',
        ),
      ),
      'testnet' => true,
    ),
    28122024 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x942fD5017c0F60575930D8574Eaca13BEcD6e1bB',
          ),
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xfa1d9E26A6aCD7b22115D27572c1221B9803c960',
            'blockCreated' => 4972908,
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0xF6Bc0146d3c74D48306e79Ae134A260E418C9335',
            'blockCreated' => 4972908,
          ),
        ),
      ),
      'id' => 28122024,
      'name' => 'Ancient8 Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpcv2-testnet.ancient8.gg',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ancient8 Celestia Testnet explorer',
          'url' => 'https://scanv2-testnet.ancient8.gg',
          'apiUrl' => 'https://scanv2-testnet.ancient8.gg/api',
        ),
      ),
      'sourceId' => 11155111,
    ),
    37084624 => 
    array (
      'id' => 37084624,
      'name' => 'SKALE Nebula Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/lanky-ill-funny-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/lanky-ill-funny-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://lanky-ill-funny-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 105141,
        ),
      ),
      'testnet' => true,
    ),
    41144114 => 
    array (
      'id' => 41144114,
      'name' => 'Otim Devnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'ETH',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'http://devnet.otim.xyz',
          ),
        ),
      ),
      'contracts' => 
      array (
        'batchInvoker' => 
        array (
          'address' => '0x5FbDB2315678afecb367f032d93F642f64180aa3',
        ),
      ),
    ),
    52164803 => 
    array (
      'id' => 52164803,
      'name' => 'Fluence Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'tFLT',
        'symbol' => 'tFLT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.fluence.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.testnet.fluence.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.testnet.fluence.dev',
          'apiUrl' => 'https://blockscout.testnet.fluence.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    111557560 => 
    array (
      'id' => 111557560,
      'name' => 'Cyber Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://cyber-testnet.alt.technology',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet.cyberscan.co',
          'apiUrl' => 'https://testnet.cyberscan.co/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xffc391F0018269d4758AEA1a144772E8FB99545E',
          'blockCreated' => 304545,
        ),
      ),
      'testnet' => true,
    ),
    161221135 => 
    array (
      'id' => 161221135,
      'name' => 'Plume Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Plume Sepolia Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-rpc.plumenetwork.xyz/http',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet-rpc.plumenetwork.xyz/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet-explorer.plumenetwork.xyz',
          'apiUrl' => 'https://testnet-explorer.plumenetwork.xyz/api',
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    168587773 => 
    array (
      'id' => 168587773,
      'name' => 'Blast Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.blast.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blastscan',
          'url' => 'https://sepolia.blastscan.io',
          'apiUrl' => 'https://api-sepolia.blastscan.io/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 756690,
        ),
      ),
      'testnet' => true,
      'sourceId' => 11155111,
    ),
    245022926 => 
    array (
      'id' => 245022926,
      'name' => 'Neon EVM DevNet',
      'nativeCurrency' => 
      array (
        'name' => 'NEON',
        'symbol' => 'NEON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://devnet.neonevm.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Neonscan',
          'url' => 'https://devnet.neonscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 205206112,
        ),
      ),
      'testnet' => true,
    ),
    245022934 => 
    array (
      'id' => 245022934,
      'network' => 'neonMainnet',
      'name' => 'Neon EVM MainNet',
      'nativeCurrency' => 
      array (
        'name' => 'NEON',
        'symbol' => 'NEON',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://neon-proxy-mainnet.solana.p2p.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Neonscan',
          'url' => 'https://neonscan.org',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 206545524,
        ),
      ),
      'testnet' => false,
    ),
    278611351 => 
    array (
      'id' => 278611351,
      'name' => 'SKALE | Razor Network',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/turbulent-unique-scheat',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/turbulent-unique-scheat',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://turbulent-unique-scheat.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    391845894 => 
    array (
      'id' => 391845894,
      'name' => 'SKALE | Block Brawlers',
      'nativeCurrency' => 
      array (
        'name' => 'BRAWL',
        'symbol' => 'BRAWL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/frayed-decent-antares',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/frayed-decent-antares',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://frayed-decent-antares.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    531050104 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
        'transactionRequest' => 
        array (
          'exclude' => 
          array (
            0 => 'customSignature',
            1 => 'factoryDeps',
            2 => 'gasPerPubdata',
            3 => 'paymaster',
            4 => 'paymasterInput',
          ),
          'type' => 'transactionRequest',
        ),
      ),
      'serializers' => 
      array (
      ),
      'custom' => 
      array (
      ),
      'id' => 531050104,
      'name' => 'Sophon Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Sophon',
        'symbol' => 'SOPH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.testnet.sophon.xyz',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.testnet.sophon.xyz/ws',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Sophon Block Explorer',
          'url' => 'https://explorer.testnet.sophon.xyz',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0x83c04d112adedA2C6D9037bb6ecb42E7f0b108Af',
          'blockCreated' => 15642,
        ),
      ),
      'testnet' => true,
    ),
    666666666 => 
    array (
      'id' => 666666666,
      'name' => 'Degen',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Degen',
        'symbol' => 'DEGEN',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.degen.tips',
          ),
          'webSocket' => 
          array (
            0 => 'wss://rpc.degen.tips',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Degen Chain Explorer',
          'url' => 'https://explorer.degen.tips',
          'apiUrl' => 'https://explorer.degen.tips/api/v2',
        ),
      ),
    ),
    728126428 => 
    array (
      'id' => 728126428,
      'name' => 'Tron',
      'nativeCurrency' => 
      array (
        'name' => 'TRON',
        'symbol' => 'TRX',
        'decimals' => 6,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://api.trongrid.io/jsonrpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Tronscan',
          'url' => 'https://tronscan.org',
          'apiUrl' => 'https://apilist.tronscanapi.com/api',
        ),
      ),
    ),
    888888888 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          1 => 
          array (
            'address' => '0xB09DC08428C8b4EFB4ff9C0827386CDF34277996',
          ),
        ),
        'portal' => 
        array (
          1 => 
          array (
            'address' => '0x639F2AECE398Aa76b07e59eF6abe2cFe32bacb68',
            'blockCreated' => 19070571,
          ),
        ),
        'l1StandardBridge' => 
        array (
          1 => 
          array (
            'address' => '0xd5e3eDf5b68135D559D572E26bF863FBC1950033',
            'blockCreated' => 19070571,
          ),
        ),
      ),
      'id' => 888888888,
      'name' => 'Ancient8',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ancient8.gg',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Ancient8 explorer',
          'url' => 'https://scan.ancient8.gg',
          'apiUrl' => 'https://scan.ancient8.gg/api',
        ),
      ),
      'sourceId' => 1,
    ),
    974399131 => 
    array (
      'id' => 974399131,
      'name' => 'SKALE Calypso Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/giant-half-dual-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/giant-half-dual-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://giant-half-dual-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 103220,
        ),
      ),
      'testnet' => true,
    ),
    999999999 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
        'l2OutputOracle' => 
        array (
          11155111 => 
          array (
            'address' => '0x2615B481Bd3E5A1C0C7Ca3Da1bdc663E8615Ade9',
          ),
        ),
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 83160,
        ),
        'portal' => 
        array (
          11155111 => 
          array (
            'address' => '0xeffE2C6cA9Ab797D418f0D91eA60807713f3536f',
          ),
        ),
        'l1StandardBridge' => 
        array (
          11155111 => 
          array (
            'address' => '0x5376f1D543dcbB5BD416c56C189e4cB7399fCcCB',
          ),
        ),
      ),
      'id' => 999999999,
      'name' => 'Zora Sepolia',
      'network' => 'zora-sepolia',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Zora Sepolia',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia.rpc.zora.energy',
          ),
          'webSocket' => 
          array (
            0 => 'wss://sepolia.rpc.zora.energy',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Zora Sepolia Explorer',
          'url' => 'https://sepolia.explorer.zora.energy/',
          'apiUrl' => 'https://sepolia.explorer.zora.energy/api',
        ),
      ),
      'sourceId' => 11155111,
      'testnet' => true,
    ),
    1020352220 => 
    array (
      'id' => 1020352220,
      'name' => 'SKALE Titan Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/aware-fake-trim-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/aware-fake-trim-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://aware-fake-trim-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 104072,
        ),
      ),
      'testnet' => true,
    ),
    1026062157 => 
    array (
      'id' => 1026062157,
      'name' => 'SKALE | CryptoBlades',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/affectionate-immediate-pollux',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/affectionate-immediate-pollux',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://affectionate-immediate-pollux.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    1032942172 => 
    array (
      'id' => 1032942172,
      'name' => 'SKALE | Crypto Colosseum',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/haunting-devoted-deneb',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/haunting-devoted-deneb',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://haunting-devoted-deneb.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    1273227453 => 
    array (
      'id' => 1273227453,
      'name' => 'SKALE | Human Protocol',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/wan-red-ain',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/wan-red-ain',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://wan-red-ain.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    1313161554 => 
    array (
      'id' => 1313161554,
      'name' => 'Aurora',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.aurora.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Aurorascan',
          'url' => 'https://aurorascan.dev',
          'apiUrl' => 'https://aurorascan.dev/api',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 62907816,
        ),
      ),
    ),
    1313161555 => 
    array (
      'id' => 1313161555,
      'name' => 'Aurora Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'Ether',
        'symbol' => 'ETH',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.aurora.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Aurorascan',
          'url' => 'https://testnet.aurorascan.dev',
          'apiUrl' => 'https://testnet.aurorascan.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    1350216234 => 
    array (
      'id' => 1350216234,
      'name' => 'SKALE | Titan Community Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/parallel-stormy-spica',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/parallel-stormy-spica',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://parallel-stormy-spica.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 2076458,
        ),
      ),
    ),
    1444673419 => 
    array (
      'id' => 1444673419,
      'name' => 'SKALE Europa Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet.skalenodes.com/v1/juicy-low-small-testnet',
          ),
          'webSocket' => 
          array (
            0 => 'wss://testnet.skalenodes.com/v1/ws/juicy-low-small-testnet',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://juicy-low-small-testnet.explorer.testnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 110858,
        ),
      ),
      'testnet' => true,
    ),
    1482601649 => 
    array (
      'id' => 1482601649,
      'name' => 'SKALE | Nebula Gaming Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/green-giddy-denebola',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/green-giddy-denebola',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://green-giddy-denebola.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 2372986,
        ),
      ),
    ),
    1564830818 => 
    array (
      'id' => 1564830818,
      'name' => 'SKALE | Calypso NFT Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/honorable-steel-rasalhague',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/honorable-steel-rasalhague',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://honorable-steel-rasalhague.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3107626,
        ),
      ),
    ),
    1666600000 => 
    array (
      'id' => 1666600000,
      'name' => 'Harmony One',
      'nativeCurrency' => 
      array (
        'name' => 'Harmony',
        'symbol' => 'ONE',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.ankr.com/harmony',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Harmony Explorer',
          'url' => 'https://explorer.harmony.one',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 24185753,
        ),
      ),
    ),
    1722641160 => 
    array (
      'id' => 1722641160,
      'name' => 'Silicon Sepolia zkEVM',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc-sepolia.silicon.network',
            1 => 'https://silicon-testnet.nodeinfra.com',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SiliconSepoliaScope',
          'url' => 'https://scope-sepolia.silicon.network',
        ),
      ),
      'testnet' => true,
    ),
    1802203764 => 
    array (
      'id' => 1802203764,
      'name' => 'Kakarot Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rpc.kakarot.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kakarot Scan',
          'url' => 'https://sepolia.kakarotscan.org',
        ),
      ),
      'testnet' => true,
    ),
    2046399126 => 
    array (
      'id' => 2046399126,
      'name' => 'SKALE | Europa Liquidity Hub',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/elated-tan-skat',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/elated-tan-skat',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://elated-tan-skat.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xcA11bde05977b3631167028862bE2a173976CA11',
          'blockCreated' => 3113495,
        ),
      ),
    ),
    2139927552 => 
    array (
      'id' => 2139927552,
      'name' => 'SKALE | Exorde',
      'nativeCurrency' => 
      array (
        'name' => 'sFUEL',
        'symbol' => 'sFUEL',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://mainnet.skalenodes.com/v1/light-vast-diphda',
          ),
          'webSocket' => 
          array (
            0 => 'wss://mainnet.skalenodes.com/v1/ws/light-vast-diphda',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'SKALE Explorer',
          'url' => 'https://light-vast-diphda.explorer.mainnet.skalenodes.com',
        ),
      ),
      'contracts' => 
      array (
      ),
    ),
    2716446429837000 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 2716446429837000,
      'name' => 'Dchain',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dchain-2716446429837000-1.jsonrpc.sagarpc.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Dchain Explorer',
          'url' => 'https://dchain-2716446429837000-1.sagaexplorer.io',
          'apiUrl' => 'https://api-dchain-2716446429837000-1.sagaexplorer.io/api',
        ),
      ),
    ),
    2713017997578000 => 
    array (
      'formatters' => 
      array (
        'block' => 
        array (
          'type' => 'block',
        ),
        'transaction' => 
        array (
          'type' => 'transaction',
        ),
        'transactionReceipt' => 
        array (
          'type' => 'transactionReceipt',
        ),
      ),
      'serializers' => 
      array (
      ),
      'contracts' => 
      array (
        'gasPriceOracle' => 
        array (
          'address' => '0x420000000000000000000000000000000000000F',
        ),
        'l1Block' => 
        array (
          'address' => '0x4200000000000000000000000000000000000015',
        ),
        'l2CrossDomainMessenger' => 
        array (
          'address' => '0x4200000000000000000000000000000000000007',
        ),
        'l2Erc721Bridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000014',
        ),
        'l2StandardBridge' => 
        array (
          'address' => '0x4200000000000000000000000000000000000010',
        ),
        'l2ToL1MessagePasser' => 
        array (
          'address' => '0x4200000000000000000000000000000000000016',
        ),
      ),
      'id' => 2713017997578000,
      'name' => 'Dchain Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://dchaintestnet-2713017997578000-1.jsonrpc.testnet.sagarpc.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Dchain Explorer',
          'url' => 'https://dchaintestnet-2713017997578000-1.testnet.sagaexplorer.io',
          'apiUrl' => 'https://api-dchaintestnet-2713017997578000-1.testnet.sagaexplorer.io/api',
        ),
      ),
    ),
    123420000220 => 
    array (
      'id' => 123420000220,
      'name' => 'Fluence Stage',
      'nativeCurrency' => 
      array (
        'name' => 'tFLT',
        'symbol' => 'tFLT',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://rpc.stage.fluence.dev',
          ),
          'webSocket' => 
          array (
            0 => 'wss://ws.stage.fluence.dev',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://blockscout.stage.fluence.dev',
          'apiUrl' => 'https://blockscout.stage.fluence.dev/api',
        ),
      ),
      'testnet' => true,
    ),
    5424235787602241 => 
    array (
      'id' => 5424235787602241,
      'name' => 'Kakarot Starknet Sepolia',
      'nativeCurrency' => 
      array (
        'name' => 'Ether',
        'symbol' => 'ETH',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://sepolia-rpc.kakarot.org',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Kakarot Scan',
          'url' => 'https://sepolia.kakarotscan.org',
        ),
      ),
      'testnet' => true,
    ),
    11297108109 => 
    array (
      'id' => 11297108109,
      'name' => 'Palm',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'PALM',
        'symbol' => 'PALM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://palm-mainnet.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://palm-mainnet.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chainlens',
          'url' => 'https://palm.chainlens.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 15429248,
        ),
      ),
    ),
    11297108099 => 
    array (
      'id' => 11297108099,
      'name' => 'Palm Testnet',
      'nativeCurrency' => 
      array (
        'decimals' => 18,
        'name' => 'PALM',
        'symbol' => 'PALM',
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://palm-mainnet.public.blastapi.io',
          ),
          'webSocket' => 
          array (
            0 => 'wss://palm-mainnet.public.blastapi.io',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Chainlens',
          'url' => 'https://palm.chainlens.com',
        ),
      ),
      'contracts' => 
      array (
        'multicall3' => 
        array (
          'address' => '0xca11bde05977b3631167028862be2a173976ca11',
          'blockCreated' => 15429248,
        ),
      ),
      'testnet' => true,
    ),
    37714555429 => 
    array (
      'id' => 37714555429,
      'name' => 'Xai Testnet',
      'nativeCurrency' => 
      array (
        'name' => 'sXai',
        'symbol' => 'sXAI',
        'decimals' => 18,
      ),
      'rpcUrls' => 
      array (
        'default' => 
        array (
          'http' => 
          array (
            0 => 'https://testnet-v2.xai-chain.net/rpc',
          ),
        ),
      ),
      'blockExplorers' => 
      array (
        'default' => 
        array (
          'name' => 'Blockscout',
          'url' => 'https://testnet-explorer-v2.xai-chain.net',
        ),
      ),
      'testnet' => true,
    ),
  ),
);
