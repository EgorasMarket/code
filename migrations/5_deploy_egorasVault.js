require("dotenv").config;
const EgorasVault = artifacts.require("./EgorasVault");
const EgorasEUSD = artifacts.require("./EgorasEUSD");
const Egoras = artifacts.require("./Egoras");
/**
 * @author blOX Consulting LLC
 * @date 8.26.19
 * Truffle migration TestGroup
 */
module.exports = async deployer => {
    let EgorasEUSDDeployed = await EgorasEUSD.deployed();
    let EgorasDeployed = await Egoras.deployed();
    await deployer.deploy(
        EgorasVault,
        EgorasEUSDDeployed.address,
        EgorasDeployed.address,
        "21000000000000"
    );
};