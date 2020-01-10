require("dotenv").config;
const EgorasEUSD = artifacts.require("./EgorasEUSD");

/**
 * @author blOX Consulting LLC
 * @date 8.26.19
 * Truffle migration TestGroup
 */
module.exports = async deployer => {
  await deployer.deploy(EgorasEUSD, "EGORAS DOLLAR", "EUSD", 18, 0);
};