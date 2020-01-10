require("dotenv").config;
const EgorasMarket = artifacts.require("./EgorasMarket");
const DaEgorasEUSD = artifacts.require("./EgorasEUSD");
const Egoras = artifacts.require("./Egoras");
/**
 * @author blOX Consulting LLC
 * @date 8.26.19
 * Truffle migration TestGroup
 */
module.exports = async deployer => {
  let DaEgorasEUSDDeployed = await DaEgorasEUSD.deployed();
  let EgorasDeployed = await Egoras.deployed();
  await deployer.deploy(
    EgorasMarket,
    "Egoras Market",
    "EGM",
    DaEgorasEUSDDeployed.address,
    EgorasDeployed.address,
    "https://egoras.com/cdn/",
    1,
    20,
    "0xC798E21313b3F30C914FC278F2f2E992c4e5A388",
    "3000000000000000000000000",
    "20000000000000000000"
  );
};