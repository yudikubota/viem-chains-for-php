const chains = require('viem/chains')

const byId = {}
for (const chain in chains)
    byId[chains[chain].id] = chains[chain]

console.log(JSON.stringify({
    chains,
    byId,
}))