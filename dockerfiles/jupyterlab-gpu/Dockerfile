# syntax=docker/dockerfile:1

# Start with basic linux container and TensorFlow image
FROM tensorflow/tensorflow:2.9.2-gpu-jupyter

CMD ['bash']

#CMD ["bash", "-c", "pip install jupyterlab"]
RUN pip install jupyterlab \
    scikit-learn

CMD ["bash", "-c", "source /etc/bash.bashrc && jupyter lab \
--notebook-dir=/tf \
--ip 0.0.0.0 \
--ServerApp.token='' \
--ServerApp.password='' \
--no-browser \
--config=/root/.jupyter/jupyter_server_config.py \
--allow-root"]
# Non-root user for security purposes.
#
# UIDs below 10,000 are a security risk, as a container breakout could result
# in the container being ran as a more privileged user on the host kernel with
# the same UID.
#
# Static GID/UID is also useful for chown'ing files outside the container where
#RUN addgroup --gid 10001 --system nonroot \
# && adduser  --uid 10000 --system --ingroup nonroot --home /home/nonroot nonroot

## Run jupyter lab with authentication disabled. Laravel middleware will be used for authentication.
#ARG JUPYTER_TOKEN=''
#
# Python dependencies
# The TensorFlow image we start from only comes with jupyter notebook.
#RUN pip install jupyterlab \
#    scikit-learn

#RUN jupyter lab --config='/home/princeer/Data/xcxlab/vendor/tensorflow/jupyter_server_config.py'

# Use the non-root user to run our application
#USER nonroot
